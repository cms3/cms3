<?php

namespace CMS3\UI;

use CMS3\Engine\NS;
use CMS3\Engine\Model;

abstract class Editor {
	
	public $template;
	
	public $controls;
	
	public $data;
	
	protected $_model;
	
	public function __construct(Model $model, $data = NULL, $template = NULL)
	{
		$this->_model = $model;
		$this->data = $data;
		if ($template === NULL)
		{
			$class = NS::extract_class_name($this);
			$parts = explode('_', $class);
			$template = $parts[count($parts) - 1];
		}
		
		$this->template = $template;
		$this->controls = new \ArrayObject();
	}
	
	public function factory($model, $template = NULL)
	{
		return new static($model, $template);
	}
	
	public function dispatch(array $params)
	{
		return NULL;
	}
	
	public function render()
	{
		return NULL;
	}
}
