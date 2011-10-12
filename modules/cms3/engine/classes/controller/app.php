<?php

namespace CMS3\Engine;
 
class Controller_App extends Controller {
	
	public function action_display()
	{
		$format = Request::current()->param('format');
		$path = Request::current()->param('path');
		$language = Request::current()->param('language');
				
		App::instance()->dispatch($path, $language, $format);
	}
	
	public function action_call($call_path = NULL)
	{
		$call_path = Request::current()->param('call_path'); // TODO

		$parts = explode('/', $call_path);
		$action = array_pop($parts);
		$controller = implode(NS::DELIMITER, $parts); 
		
		App::instance()->dispatch_action($controller, $action);
	}
}
