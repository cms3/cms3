<?php

namespace CMS3\Engine;
 
class Renderer_Template extends Renderer {

	public function render($name, array $params = array())
	{
		return Template::render($name);
	}
	
}