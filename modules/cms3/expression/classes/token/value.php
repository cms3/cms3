<?php

namespace CMS3\Expression;

class Token_Value extends Token {

	public $value;
	
	public function __construct($value)
	{
		$this->value = $value;
		$this->offset = strlen($this->value);
	}
	
	public function __toString()
	{
		return (string)$this->value;
	} 
}