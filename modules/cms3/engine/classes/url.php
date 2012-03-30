<?php

namespace CMS3\Engine;

class URL extends \URL {

    const PART_DELIMITER = '/';

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

    public static function query(array $params = NULL, $use_get = TRUE, $escape_special = FALSE)
	{
		if ($use_get)
		{
			if ($params === NULL)
			{
				// Use only the current parameters
				$params = $_GET;
			}
			else
			{
				// Merge the current and new parameters
				$params = array_merge($_GET, $params);
			}
		}

		if (empty($params))
		{
			// No query parameters
			return '';
		}

		if ($escape_special)
        {
		    $query = http_build_query($params, '', '&');
        }
        else
        {
            $query = array();
            foreach ($params as $name => $value)
            {
                $query[] = $name . '=' . $value;
            }
            $query = implode('&', $query);
        }

		// Don't prepend '?' to an empty string
		return ($query === '') ? '' : ('?'.$query);
	}

}