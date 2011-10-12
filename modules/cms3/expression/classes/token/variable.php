<?php

namespace CMS3\Expression;

class Token_Variable extends Token_Value {

	const ALLOWED_CHARS = 'abcdefghijklmnopqrstuvwxyz_0123456789';
	
	const ALLOWED_FIRST = 'abcdefghijklmnopqrstuvwxyz_';
	
	public static function detect($string)
	{
		return static::char_in_set($string{0}, static::ALLOWED_FIRST);
	}
	
	public static function read($string)
	{
		$result = '';
		$position = 0;
		while (strlen($string) > $position && static::char_in_set($string{$position}, static::ALLOWED_CHARS))
		{
			$position++;
		}
		return new Token_Value(substr($string, 0, $position));
	}
}