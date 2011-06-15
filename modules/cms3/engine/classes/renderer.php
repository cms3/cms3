<?php

namespace CMS3\Engine;
 
class Renderer {
	
	protected $tpl_engine = NULL;
	
	public function __construct(Template $tpl_engine)
	{
		$this->tpl_engine = $tpl_engine;
	}

	public function render($name, array $params = array()){}
}