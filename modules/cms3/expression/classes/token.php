<?php

namespace CMS3\Expression;

abstract class Token {

	public $offset = 0;

	public static function detect($string) {}
	
	public static function read($string) {}
	
	protected static function get_char($string, $index)
	{
		if (strlen($string) >= $index)
		{
			return substr($string, $index, 1);
		}
		else
		{
			return NULL;
		}
	}
	
	protected static function char_in_set($char, $set)
	{
		return strlen($char) && strlen($set) && (strpos(strtolower($set), strtolower($char)) !== FALSE);
	}
}