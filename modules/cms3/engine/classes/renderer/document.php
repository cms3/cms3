<?php

namespace CMS3\Engine;
 
class Renderer_Document extends Renderer implements Renderer_Interface {

	public $default_priority = -100;

	public function render($name, array $params = array())
	{
		$doc = App::instance()->document;
		$function = 'display_' . strtolower($name);
		
		return $doc->$function($params);
	}
	
}
