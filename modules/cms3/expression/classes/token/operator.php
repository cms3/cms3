<?php

namespace CMS3\Expression;

class Token_Operator extends Token {

	public $name;
	
	public $operator;
	
	public function __construct($name)
	{
		$this->name = $name;
		$this->offset = strlen($this->name);
	}
	
	public static function detect($string)
	{
		if (! $allowed_operators = func_get_arg(1))
		{
			return FALSE;
		}

		return static::read($string, $allowed_operators) != NULL;
	}
	
	public static function read($string)
	{
		if (! $allowed_operators = func_get_arg(1))
		{
			return FALSE;
		}
		foreach ($allowed_operators as $operator)
		{
			if (strtoupper($operator) == strtoupper(substr($string, 0, strlen($operator))))
			{
				return new static($operator);
			}
		}
		return NULL;
	}
}