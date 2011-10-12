<?php

namespace CMS3\UI_Grid;
 
class Helper_JSON
{
	protected static function _encode_var($var)
	{
		if (is_bool($var))
		{
			return $var ? 'true' : 'false';
		}
		else if (is_null($var))
		{
			return 'null';
		}
		else if (is_string($var))
		{
			return json_encode($var);
		}
		else
		{
			return $var;
		}
	}

	public static function encode($var, $options = array(
			'camelize' => false
		))
	{
		if (is_object($var) or is_array($var))
		{
			$fields = is_object($var) ? get_object_vars($var) : $var;
			$output = array();
			foreach ($fields as $name => $value)
			{
				$name = $options['camelize'] ? \inflector::camelize($name) : $name;
				$output[] = json_encode($name) . ':' . static::encode($value, $options);
			}
			return '{' . implode(',', $output) . '}';

		}
		else
		{
			return static::_encode_var($var);
		}
	}
}
