<?php

namespace CMS3\Expression;

class Token_CloseBrace extends Token {

	public $offset = 1;

	public static function detect($string)
	{
		return static::get_char($string, 0) == ')';
	}
	
	public static function read($string)
	{
		return new static();
	}
	
	public function __toString()
	{
		return ')';
	} 
}