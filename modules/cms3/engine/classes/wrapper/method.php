<?php

namespace CMS3\Engine;

class Wrapper_Method implements Wrapper_Interface {

	protected $_class = NULL;
	
	protected $_method = NULL;

	public function __construct($class, $method)
	{
		$this->_class = $class;
		$this->_function = $method;
	}
	
	public function call($args = NULL)
	{
		if (! method_exists($this->_class, $this->_function))
		{
			throw new Exception('Method must be callable');
		}
		$callback = array($this->_class, $this->_function);
		$args = func_get_args();
		return call_user_func_array($callback, $args);
	}
	
	public function class_($class = NULL)
	{
		if ($class !== NULL)
		{
			$this->_class = $class;
		}
		
		return $this->_class;
	}
	
	public function method($method = NULL)
	{
		if ($method !== NULL)
		{
			$this->_method = $method;
		}
		
		return $this->_method;
	}
}