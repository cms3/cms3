<?php

namespace CMS3\Engine;

class Core extends \Kohana {
	
	public static function modules(array $modules = NULL)
	{
		if (is_array($modules))
		{
			$expanded = array();
			foreach ($modules as $key => $value)
			{
				if (is_numeric($key))
				{
					$expanded[$value] = MODPATH . str_replace('\\', DIRECTORY_SEPARATOR, $value); 
				}
				else
				{
					$expanded[$key] = $value;
				}
			}
			return parent::modules($expanded);
		}
		return parent::modules($modules);
	}

	public static function find_file($dir, $file, $ext = NULL, $array = FALSE, $paths = NULL)
	{
		if (static::$profiling === TRUE AND class_exists('Profiler', FALSE))
		{
			// Start a new benchmark
			$benchmark = \Profiler::start('CMS3', __FUNCTION__);
		}
		
		// Use the defined extension by default
		$ext = ($ext !== NULL) ? ('.' . $ext) : \EXT;
		
		if ($paths == NULL){
			$paths = static::$_paths;
		}
		
		// Create a partial path of the filename
		$path = $dir . DIRECTORY_SEPARATOR . $file . $ext;
		
		// TODO: caching
		
		if ($array OR $dir === 'config' OR $dir === 'i18n' OR $dir === 'messages')
		{
			// Include paths must be searched in reverse
			$paths = array_reverse($paths);

			// Array of files that have been found
			$found = array();

			foreach ($paths as $dir)
			{
				if (is_file($dir.$path))
				{
					// This path has a file, add it to the list
					$found[] = $dir.$path;
				}
			}
		}
		else
		{
			// The file has not been found yet
			$found = FALSE;
			
			foreach ($paths as $dir)
			{
				if (is_file($dir.$path))
				{
					// A path has been found
					$found = $dir.$path;

					// Stop searching
					break;
				}
			}
		}

		if (isset($benchmark))
		{
			// Stop the benchmark
			\Profiler::stop($benchmark);
		}
		
		return $found;
	}
	
	public static function config($group)
	{
		static $config;

		if (strpos($group, '.') !== FALSE)
		{
			// Split the config group and path
			list ($group, $path) = explode('.', $group, 2);
		}

		if ( ! isset($config[$group]))
		{
			// Load the config group into the cache
			$config[$group] = static::$config->load($group);
		}

		if (isset($path))
		{
			return Arr::path($config[$group], $path, NULL, '.');
		}
		else
		{
			return $config[$group];
		}
	}
	
	public static function auto_load($class)
	{
		$parts = explode('\\', $class);
		
		$class_name = array_pop($parts);
		$namespace = implode('\\', $parts);
		
		$file = str_replace('_', DIRECTORY_SEPARATOR, strtolower($class_name));
		
		$all_modules = static::get_module_names();
		$global_modules = static::get_module_names('global');
		$ns_modules = static::get_module_names('namespace');
		
		if ($namespace != '') // Class use some namespace
		{
			$native_paths = static::modules_to_paths(array(strtolower($namespace)));
			$dir = strtolower(implode(DIRECTORY_SEPARATOR, $parts));
			$override_paths = static::modules_to_paths($all_modules, '-override' . DIRECTORY_SEPARATOR . $dir);
		}
		else // Global class
		{
			$native_paths = static::modules_to_paths($global_modules);
			$override_paths = static::modules_to_paths($ns_modules, '-global');
		}

		$paths[] = \APPPATH . 'classes';
		$paths = array_merge($paths, $override_paths, $native_paths);
		$paths[] = \SYSPATH . 'classes';

		$file_location = static::find_file('', $file, NULL, FALSE, $paths);

		if (is_file($file_location))
		{
			// Load the class file
			require_once $file_location;

			// Class has been found
			return TRUE;
		}

		// Class is not in the filesystem
		return FALSE;
	}
	
	/**
	 * @param   string  Search area: NULL, 'global', 'namespace'
	 * @return  array
	 */
	public static function get_module_names($area = NULL)
	{
		if ($area === NULL)
		{
			$modules = array_keys(static::$_modules);
		}
		else
		{
			$area = strtolower($area);
			$modules = array();
			foreach (static::$_modules as $name => $path)
			{
				$global = strpos($name, '\\') === FALSE; 

				if (($global == TRUE && $area == 'global') || ($global == FALSE && $area == 'namespace'))
				{
					$modules[] = $name;
				}
			}
		}
				
		return $modules;
	}
	
	private static function modules_to_paths($modules, $dir = NULL)
	{
			
		$paths = array();
		foreach ($modules as $module)
		{
			$path = \MODPATH . str_replace('\\', DIRECTORY_SEPARATOR, $module) . DIRECTORY_SEPARATOR . 'classes';
			if ($dir != NULL)
			{
				$path .=  DIRECTORY_SEPARATOR . $dir;
			}
			$paths[] = $path;
		}
		return $paths;
	}
	
}