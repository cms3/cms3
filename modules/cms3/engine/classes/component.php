<?php

namespace CMS3\Engine;

abstract class Component {

	public $name = NULL;
	
	public $controller = NULL;
	
	protected $_config = NULL;

	public function __construct()
	{
		$this->name = NS::extract_namespace($this);
		
		$controller = NS::add_namespace('Controller', $this->name);
		$this->controller = new $controller(Request::current(), Request::current()->response());
		$this->controller->component = $this;
		
		$this->_load_config();
	}
	
	protected function _load_config()
	{
		$this->_config = \CMS3::config($this->name);
	}
	
	public function explode_params($params)
	{
		return $params;
	}
	
	public function implode_params($params)
	{
		return $params;
	}
	
	public static function instance($name = NULL)
	{
		static $instances;
		
		if ($name === NULL)
		{
			$name = get_called_class();
		}
		
		$name = strtolower($name);
		
		if (class_exists($name))
		{
			$name = NS::extract_namespace($name);
		}
		
		if (! isset($instances[$name]))
		{
			$class = NS::add_namespace('Component', $name);
			$instance = new $class();
			$instances[$name] = $instance;
		}
		return $instances[$name];
	}
	
	public function get_param($param_name)
	{
		$param = strtolower($this->name . '_' . $param_name);
		
		// TODO: возможны пересечения
		$param = NS::extract_module_name($param);
		
		return Request::$initial->param($param);
	}
	
	public function get_view($file = NULL, array $data = NULL)
	{	
		if ($file === NULL)
		{
			$file = $this->name;
		}
		return View_Component::factory($file, $data)->set_component($this->name);
	}

}