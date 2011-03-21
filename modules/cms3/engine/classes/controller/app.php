<?php

namespace CMS3\Engine;
 
class Controller_App extends \Controller {
	
	public function action_display($language, $path, $format)
	{
		/*
		$format = Request::current()->param('format');
		$path = Request::current()->param('path');
		$language = Request::current()->param('language');
		*/
				
		App::instance()->dispatch($path, $language, $format);
	}
	
	
	public function action_call($call_path)
	{
		$parts = explode('/', $call_path);
		$action = array_pop($parts);
		$controller = implode(NS::DELIMITER, $parts); 
		
		App::instance()->dispatch_action($controller, $action);
	}
}
