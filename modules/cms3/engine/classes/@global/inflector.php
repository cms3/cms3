<?php

class Inflector extends \Kohana_Inflector {

	public static function uncountable($str)
	{
		if (Inflector::$uncountable === NULL)
		{
			// Cache uncountables
			Inflector::$uncountable = array_merge(\CMS3::$config->load('inflector')->uncountable, \CMS3::$config->load('cms3\inflector')->uncountable);

			// Make uncountables mirrored
			Inflector::$uncountable = array_combine(Inflector::$uncountable, Inflector::$uncountable);
		}

		return parent::uncountable($str);
	}

	public static function singular($str, $count = NULL)
	{
		$parts = explode('_', $str);
		if (count($parts) <= 1)
		{
			return parent::singular($str, $count);
		}
		else
		{
			$word = array_pop($parts);
			$prefix = implode('_', $parts) . '_';
			
			return $prefix . parent::singular($word, $count);
		}
	}

	public static function plural($str, $count = NULL)
	{
		$parts = explode('_', $str);
		if (count($parts) <= 1)
		{
			return parent::plural($str, $count);
		}
		else
		{
			$word = array_pop($parts);
			$prefix = implode('_', $parts) . '_';
			
			return $prefix . parent::plural($word, $count);
		}
	}

}
