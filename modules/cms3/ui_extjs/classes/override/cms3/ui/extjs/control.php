<?php

namespace CMS3\UI;

use CMS3\Engine\Template;

abstract class ExtJS_Control extends Control {
	
	const TPL_SUFFIX = '.tpl';
	
	public $name = NULL;
	
	public $data = NULL;
	
	public function __construct()
	{
		$this->data = new \StdClass();	
	}
	
	public function action_display()
	{
		if ($this->name == NULL) return NULL;
		$this->pre_render();

		echo (string)$this;
	}
	
	/*
	public function render($template, array $data = array())
	{
		$file = $template . ExtJS::EXT;
		return Template::display($file, $data);
	}
	*/
	
	public function pre_render(){}
	
	public function __toString()
	{
		if ($this->name == NULL)
		{
			return '{}';
		}
		if ($this->data !== NULL)
		{
			$properties = ExtJS::convert_object($this->data);
		}

		$script = 'Ext.create("' . $this->name . '", ' . $properties . ')';
		
		return $script;
	}
	
}
