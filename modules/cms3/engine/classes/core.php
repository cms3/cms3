<?php

namespace CMS3\Engine;

class Core extends \Kohana {

	public static function run()
	{
		echo Request::factory()
			->execute()
			->send_headers()
			->body();
	}
	
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
		if (\Kohana::$profiling === TRUE AND class_exists('Profiler', FALSE))
		{
			// Start a new benchmark
			$benchmark = \Profiler::start('CMS3', __FUNCTION__);
		}
		
		// Use the defined extension by default
		$ext = ($ext !== NULL) ? ('.' . $ext) : \EXT;
		
		if ($paths == NULL)
		{
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
	/*
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
	
	*/
}