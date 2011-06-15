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

		if (DIRECTORY_SEPARATOR != '/')
		{
			$path = str_replace('/', DIRECTORY_SEPARATOR, $path);
		}
		if (DIRECTORY_SEPARATOR != '\\')
		{
			$path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
		}

		$test_path = rtrim(substr($path, 0, strlen(DOCROOT)), DIRECTORY_SEPARATOR);
		if ($test_path . DIRECTORY_SEPARATOR == DOCROOT)
		{
			$path = substr($path, strlen(DOCROOT) - 1);
		}
		else
		{
			return FALSE;
		}
		
		$url = str_replace(DIRECTORY_SEPARATOR, '/', $path);
		$url = static::site($url, TRUE);
		if (($len = strlen($path)) && $path{$len - 1} == DIRECTORY_SEPARATOR)
		{
			$url .= '/';
		}
		
		return $url;
	}

}