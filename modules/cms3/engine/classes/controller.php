<?php

namespace CMS3\Engine;

class Controller extends \Controller {

	public static $default_controller = 'CMS3\Engine\App';

	public static $default_action = 'display';

	public function __construct(\Request $request = NULL, \Response $response = NULL)
	{
		if ($request === NULL)
		{
			$request = Request::current();
		}
		if ($response === NULL)
		{
			$response = Request::current()->response();
		}
	
		parent::__construct($request, $response);
	}

	public function view($template, $default_template, $data)
	{
		return View::factory($template ?: $default_template, $data);
	}
	
	public function action_display() {}
	
	public function action($function)
	{
		$call = "action_" . $function;
		$args = func_get_args();
		array_shift($args);

		return call_user_func_array(array($this, $call), $args);
	}
	
	public function action_safe($function, array $params = array())
	{
		$token = @$params['token'];

		if (! \Security::check($token))
		{
			throw new Exception('Token isn\'t valid'); // TODO: нормальное сообщение
		} 
		$this->action($function, $params);
	}
	
	public function display($function = NULL, array $params = array(), $template = NULL)
	{
		$param_string = serialize(Request::current()->param() + $params);
		$cache_id = sha1("controller_output_" . $function . "_" . $param_string);
		if (TRUE || ! $data = \Cache::instance()->get($cache_id))
		{
			$call = 'display';
			if ($function != NULL)
			{
				$call .= '_' . $function;
			}
			ob_start();
			$this->action($call, $params, $template);
			$data = ob_get_contents();
			ob_end_clean();
			//\Cache::instance()->set($cache_id, $data);
		}
		else
		{
			$data .= " [cached id is $cache_id]";
		}
		
		echo $data;
	}

	public static function factory($module = NULL)
	{
		if (count(explode(NS::DELIMITER, $module)) >= 3)
		{
			$class = $module;
		}
		else
		{
			if ($module !== NULL)
			{
				$class = NS::add_namespace('Controller', $module);
			}
			else
			{
				$class = get_called_class();
			}
		}
		
		if (class_exists($class))
		{
			return new $class;
		}
		else
		{
			return FALSE;
		}
	}
}
