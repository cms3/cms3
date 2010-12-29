<?php

namespace CMS3\Engine;

abstract class BaseClass {

	protected static function get_namespace()
	{
		$reflection = new \ReflectionClass(get_called_class());
		return $reflection->getNamespaceName();
	}
	
	public static function get_module_name()
	{
		$namespace = static::get_namespace();
		$parts = explode('\\', $namespace, 2);
		if (count($parts) > 1)
		{
			return $parts[1];
		}
		else
		{
			return '';
		}
	}
}
