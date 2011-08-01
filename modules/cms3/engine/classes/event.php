<?php

namespace CMS3\Engine;

class Event {

	protected static $_handlers = array();

	public static function bind($event, $handler)
	{
		self::$_handlers[strtolower($event)][] = $handler;
	}
	
	public static function fire($event, $sender, $args = NULL)
	{
		$event = static::_expand_namespace($event, $sender);
		$args = array_slice(func_get_args(), 1);

		static::_process_statical($event, $args);
		static::_process_dynamical($event, $args);
	}
	
	protected static function _process_statical($event, array $args)
	{
		$class_name = 'Event_' . str_replace('.', '_', $event); 
		foreach (\CMS3::get_module_names() as $module)
		{
			$class = NS::add_namespace($class_name, $module);
			if (method_exists($class, 'execute'))
			{
				call_user_func_array(array($class, 'execute'), $args);
			}
		}
	}
	
	protected static function _process_dynamical($event, array $args)
	{
		$event = strtolower($event);
		if (isset(self::$_handlers[$event]))
		{
			foreach (self::$_handlers[$event] as $handler)
			{
				call_user_func_array($handler, $args);
			}
		}
	}
	
	protected static function _expand_namespace($event, $class)
	{
		$parts = explode('.', $event);
		if (count($parts) < 2)
		{
			$namespace = NS::extract_namespace($class);
			$prefix = str_replace('\\', '.', $namespace);
			$event = $prefix . '.' . $event; 
		}
		
		return $event;
	}
	
	private final function __construct(){}
}