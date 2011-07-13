<?php

namespace CMS3\Engine;

use CMS3\Template\Template;
 
class Renderer_Template extends Renderer {

	public function render($name, array $params = array())
	{
		return Template::render($name);
	}
	
}