<?php

namespace CMS3\Engine;
 
class Renderer_Document extends Renderer implements Renderer_Interface {

	public function render($name, array $params = array())
	{
		$doc = App::instance()->document;
		$function = 'display_' . strtolower($name);
		
		return $doc->$function();
	}
	
}
