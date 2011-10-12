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

	public function preload($interface)
	{
		$observer = new \CMS3\Engine\ORM_Builder();
		$spl = new InheritedObject();
		$interface = $spl->createInterface($interface);

		foreach ($interface->fields as $field)
		{
			if ($field->can_executed)
			{
				$this->extension->add($field);
				\CMS3\Engine\Template_Engine::instance()->build($field->template);
				//$this->load_
			}
			else
			{
				$this->load_ui($interface->ui_engine);
			}
		}

		return $observer;
	}

	public static function load($class)
	{
		// Sanitize class name.
		$class = strtolower($class);

		// If the class already exists do nothing.
		if (class_exists($class)) {
			  return;
		}

		// If the class is registered include the file.
		if (isset(self::$_classes[$class]))
		{
			include self::$_classes[$class];
			return true;
		}

		return false;
	}

	public function load_ui($name)
	{
		if ($ui = UI_Library::load($name))
		{
			$this->_append_library($ui);
		}
	}

	protected function _append_library($instance)
	{
		// TODO!
	}
}
