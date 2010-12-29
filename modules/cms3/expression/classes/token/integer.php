<?php

namespace CMS3\Expression;

class Token_Integer extends Token_Value {

	const NUMBER_CHARS = '0123456789';

	protected static function is_number_char($string, $index)
	{
		return static::char_in_set(static::get_char($string, $index), static::NUMBER_CHARS);
	}
	
	public static function detect($string)
	{
		return static::is_number_char($string, 0);
	}
	
	public static function read($string)
	{
		$result = '';
		$position = 0;
		while (strlen($string) > $position && static::is_number_char($string, $position))
		{
			$position++;
		}
		return new static(substr($string, 0, $position));
	}
}