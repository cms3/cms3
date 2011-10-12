<?php

namespace CMS3\UI;

class ExtJS_Handler {

	protected $_name = NULL;
	protected $_code = NULL;

	public function __construct($name = NULL, $code = NULL)
	{
		$this->_name = $name;
		$this->_code = $code;
	}
	
	public function __toString()
	{
		if ($this->_name != NULL)
		{
			return $this->_name;
		}
		else
		{
			return 'function (){' . $this->_code . '}';
		}
	}
}
