<?php

namespace CMS3\Engine;

class Wrapper_Function implements Wrapper_Interface {

	protected $_function = NULL;

	public function __construct($function)
	{
		$this->_function = $function;
	}
	
	public function call($args = NULL)
	{
		if (! is_callable($this->_function))
		{
			throw new Exception('Function must be callable');
		}
		$args = func_get_args();
		return call_user_func_array($this->_function, $args);
	}
}