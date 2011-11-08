<?php

namespace CMS3\Engine;

class URL extends \URL {

	public static function current()
	{
		return static::site(Request::current()->uri(), TRUE);
	}
	
	public static function real_to_site($path)
	{
		//$path = realpath($path);

		$separator = DIRECTORY_SEPARATOR;
		
		if ($separator != '/')
		{
			$path = str_replace('/', $separator, $path);
		}
		if ($separator != '\\')
		{
			$path = str_replace('\\', $separator, $path);
		}

		$test_path = rtrim(substr($path, 0, strlen(DOCROOT)), $separator);
		if ($test_path . $separator != DOCROOT)
		{
			return FALSE;
		}
		$path = substr($path, strlen(DOCROOT) - 1);
		
		$url = str_replace($separator, '/', $path);
		$url = static::site($url, TRUE);
		if (($len = strlen($path)) && $path{$len - 1} == $separator)
		{
			$url .= '/';
		}
		
		return $url;
	}

}