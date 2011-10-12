<?php

namespace CMS3\Engine;

interface Template_Engine_Interface {
	
	public function render($content, array $vars = array());
}
