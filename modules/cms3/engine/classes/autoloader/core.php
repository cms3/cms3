<?php

namespace CMS3\Engine;

class Autoloader_Core {
	
	public static function load_class($class)
	{
		list($class_name, $namespace) = static::_parse_namespace($class);
		$file = str_replace('_', DIRECTORY_SEPARATOR, strtolower($class_name));

		$file_location = static::find_file_entity($file, $namespace, 'classes', EXT);

		if (! empty($file_location))
		{
			// Load the class file
			require_once $file_location;

			// Class has been found
			return TRUE;
		}
		// Class is not in the filesystem
		return FALSE;
	}

	public static function find_file_entity($name, $namespace, $group, $ext = NULL)
	{
		$paths = static::get_possible_paths($namespace, $group);

		foreach ($paths as $path)
		{
			$filename = $path . DIRECTORY_SEPARATOR . $name . $ext;
			if (is_file($filename))
			{
				return $filename;
			}
		}

		return FALSE;
	}

	/**
	 * @param   string  Search area: NULL, 'global', 'namespace'
	 * @return  array
	 */
	public static function get_module_names($area = NULL)
	{
		if (class_exists('\CMS3'))
		{
			$modules = \CMS3::modules();
		}
		else
		{
			$modules = array(__NAMESPACE__ => NULL); // TODO: не очень красиво
		}

		if ($area === NULL)
		{
			$names = array_keys($modules);
		}
		else
		{
			$area = strtolower($area);
			$names = array();
			foreach ($modules as $name => $path)
			{
				$global = strpos($name, '\\') === FALSE;

				if (($global == TRUE && $area == 'global') || ($global == FALSE && $area == 'namespace'))
				{
					$names[] = $name;
				}
			}
		}

		return $names;
	}

	public static function get_possible_paths($namespace, $group)
	{
		$all_modules = static::get_module_names();
		$global_modules = static::get_module_names('global');
		$ns_modules = static::get_module_names('namespace');

		if ($namespace != '') // Entity use some namespace
		{
			$parts = explode('\\', $namespace);
			$ns_dir = strtolower(implode(DIRECTORY_SEPARATOR, $parts));

			$native_paths = static::_modules_to_paths(array(strtolower($namespace)), $group);
			$override_paths = static::_modules_to_paths($all_modules, $group, '@override' . DIRECTORY_SEPARATOR . $ns_dir);
			$extend_paths = static::_modules_to_paths($all_modules, $group, '@extend' . DIRECTORY_SEPARATOR . $ns_dir);
		}
		else // Global entity
		{
			$native_paths = static::_modules_to_paths($global_modules, $group);
			$override_paths = static::_modules_to_paths($ns_modules, $group, '@global');
			$extend_paths = array();
		}

		$paths[] = \APPPATH . $group;
		$paths = array_merge($paths, $override_paths, $native_paths);
		$paths[] = \SYSPATH . $group;
		$paths = array_merge($paths, $extend_paths);

		return $paths;
	}

	protected static function _modules_to_paths($modules, $group, $dir = NULL)
	{

		$paths = array();
		foreach ($modules as $module)
		{
			$path = \MODPATH . str_replace('\\', DIRECTORY_SEPARATOR, $module) . DIRECTORY_SEPARATOR . $group;
			if ($dir != NULL)
			{
				$path .=  DIRECTORY_SEPARATOR . $dir;
			}
			$paths[] = $path;
		}
		return $paths;
	}

	protected static function _parse_namespace($entity)
	{
		$parts = explode('\\', $entity);

		return array(
			array_pop($parts),
			implode('\\', $parts)
		);
	}
}