<?php

namespace CMS3\Engine;
 
class Renderer_Document extends Renderer {

	public function render($name, array $params = array())
	{
		$doc = App::instance()->document;
		$function = 'display_' . strtolower($name);
		
		return $doc->$function();
	}
	
}
