<?php

namespace CMS3\Engine;

class Autoloader_Core {

	protected static $_cache = NULL;

	protected static $_new_cache = NULL;
	
	protected static $_cache_loaded = FALSE;

	protected static $_cache_load_start_time = 0;

	protected static $_cache_filename;
	
	public static function init()
	{
		static::$_cache_filename = \APPPATH . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'autoload.cache';

		static::_load_cache();
	}
	
	public static function deinit()
	{
		static::_save_cache();
	}

	protected static function _cache_key($namespace, $group, $filename)
	{
		$delimiter = '::';

		return strtolower($namespace . $delimiter . $group . $delimiter . $filename);
	}

	protected static function _get_cached_path($namespace, $group, $filename)
	{
		$key = static::_cache_key($namespace, $group, $filename);
		if (isset(static::$_new_cache[$key]))
		{
			return static::$_new_cache[$key];
		}
		elseif (isset(static::$_cache[$key]))
		{
			return static::$_cache[$key];
		}
		else
		{
			return FALSE;
		}
	}
	
	protected static function _set_cached_path($namespace, $group, $filename, $path)
	{
		$key = static::_cache_key($namespace, $group, $filename);
		
		static::$_new_cache[$key] = $path;
	}
	
	protected static function _load_cache()
	{
		if (! static::$_cache_loaded)
		{
			static::$_cache_load_start_time = time();

			if (is_file(static::$_cache_filename))
			{
				// TODO: в цикле, подавлять ошибки
				$content = file_get_contents(static::$_cache_filename);
				if ($content)
				{
					static::$_cache = eval($content);
					static::$_cache_loaded = TRUE;
				}
			}
		}
	}
	
	protected static function _save_cache()
	{
		if (is_array(static::$_new_cache) && count(static::$_new_cache))
		{
			if (is_file(static::$_cache_filename))
			{
				if (filemtime(static::$_cache_filename) > static::$_cache_load_start_time)
				{
					return;
				}

				$file = fopen(static::$_cache_filename, 'r+');
				fseek($file, -2, SEEK_END);
				fwrite($file, ',');
			}
			else
			{
				$file = fopen(static::$_cache_filename, 'w');
				fwrite($file, 'return array(');
			}

			$i = 1;
			foreach (static::$_new_cache as $key => $value)
			{
				$line = "\n'$key' => '$value'";
				$line .= ($i < count(static::$_new_cache)) ? ',' : ');';
				fwrite($file, $line);
				$i++;
			}
			fclose($file);
		}
	}
	
	public static function load_class($class)
	{
		$result = FALSE;

		list($class_name, $namespace) = static::_parse_namespace($class);
		$file = str_replace('_', DIRECTORY_SEPARATOR, strtolower($class_name));

		$file_location = static::find_file_entity($file, $namespace, 'classes', EXT);

		if (! empty($file_location))
		{
			$profiling = class_exists('\Profiler')  && class_exists('\CMS3') && \CMS3::$profiling === TRUE;
			if ($profiling)
			{
				$benchmark = \Profiler::start(get_called_class(), __FUNCTION__ . ' [require_once]');
			}
			// Load the class file
			require_once $file_location;
			if ($profiling)
			{
				\Profiler::stop($benchmark);
			}

			$result = TRUE;
		}

		return $result;
	}

	public static function find_file_entity($name, $namespace, $group, $ext = NULL)
	{
		$profiling = class_exists('\Profiler') && class_exists('\CMS3') && \CMS3::$profiling === TRUE;
		if ($profiling)
		{
			$benchmark = \Profiler::start(get_called_class(), __FUNCTION__);
		}

		$path = static::_get_cached_path($namespace, $group, $name . $ext);
		if ($path !== FALSE)
		{
			$result = $path;
		}
		else
		{
			$result = FALSE;

			$paths = static::get_possible_paths($namespace, $group);

			foreach ($paths as $path)
			{
				$filename = $path . DIRECTORY_SEPARATOR . $name . $ext;

				if (is_file($filename))
				{
					$result = $filename;
					break;
				}
			}
			static::_set_cached_path($namespace, $group, $name . $ext, $result);
		}

		if ($profiling)
		{
			\Profiler::stop($benchmark);
		}

		return $result;
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
		$profiling = class_exists('\Profiler') && \CMS3::$profiling === TRUE;
		if ($profiling)
		{
			$benchmark = \Profiler::start(get_called_class(), __FUNCTION__);
		}
	
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
		
		if ($profiling)
		{
			\Profiler::stop($benchmark);
		}

		return $paths;
	}

	protected static function _modules_to_paths($modules, $group, $dir = NULL)
	{

		$paths = array();
		foreach ($modules as $module)
		{
			$path = \MODPATH . str_replace('\\', DIRECTORY_SEPARATOR, strtolower($module)) . DIRECTORY_SEPARATOR . strtolower($group);
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