<?php

namespace CMS3\Engine;

class Controller extends \Controller {

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
	
	public function action_display() {}
	
	public function action($function, array $params = array())
	{
		$call = "action_" . $function;
		return $this->$call($params);
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
	
	public function display($function = NULL, array $params = array())
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
			$this->action($call, $params);
			$data = ob_get_contents();
			ob_end_clean();
			\Cache::instance()->set($cache_id, $data);
		}
		else
		{
			$data .= " [cached id is $cache_id]";
		}
		
		echo $data;
	}
}