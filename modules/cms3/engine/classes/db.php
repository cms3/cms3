<?php

namespace CMS3\Engine;

class DB extends \DB {

	const MODULE_SEPARATOR = '__';
	
	public static function get_table_module($table)
	{
		$parts = explode(static::MODULE_SEPARATOR, $table);
	
		return (count($parts) > 1) ? $parts[0] : NULL;
	}
	
	public static function add_table_module($table, $module)
	{
		if ($module != NULL)
		{
			$table = $module . static::MODULE_SEPARATOR . $table;
		}
		return $table;
	}
	
	public static function remove_table_module($table)
	{
		$parts = explode(static::MODULE_SEPARATOR, $table);
	
		return (count($parts) > 1) ? $parts[1] : $table;
	}
}