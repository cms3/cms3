<?php

namespace CMS3\Expression;

class Token_String extends Token_Value {

	const QUOTE_CHAR = '"';
	
	public function __construct($value)
	{
		parent::__construct($value);
		$this->offset = strlen($this->value) + 2;
	}
	
	public static function detect($string)
	{
		return static::get_char($string, 0) == static::QUOTE_CHAR;
	}
	
	public static function read($string)
	{
		$result = '';
		$position = 1;
		while (strlen($string) > $position && $string{$position} != static::QUOTE_CHAR)
		{
			$position++;
		}
		return new static(substr($string, 1, $position - 1));
	}
}