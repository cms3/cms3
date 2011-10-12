<?php

namespace CMS3\Admin;

use CMS3\Engine\Renderer;

class UI_ExtJS_Renderer extends CMS3\Engine\Renderer {
	
	public function render($name, array $params = array())
	{
		$function = "render_" . strtolower($name);
		
		return $extjs->$function();
	}
}