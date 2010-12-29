<?php

namespace CMS3\Engine;

class Controller_Component extends \Kohana_Controller {
	
	public $component = NULL;
	
	public function action_display() {}
	
	public function action($function, array $params = array())
	{
		$call = "action_" . $function;
		return $this->$call($params);
	}
	
	public function action_csrf_protected($function, array $params = array())
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
		$param_string = serialize(Request::instance()->param() + $params);
		$cache_id = sha1("component_output_" . $function . "_" . $param_string);
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
