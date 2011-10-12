<?php

namespace CMS3\Engine;
 
class Renderer_Template extends Renderer implements Renderer_Interface {

	public function render($name, array $params = array())
	{
		return Template::display($name, $params);
	}
	
}