<?php

namespace CMS3\Engine;

class Route extends \Kohana_Route {

	public static function remove($name)
	{
		if (isset(static::$_routes[$name]))
		{
			unset(static::$_routes[$name]);
		}
		
	}
}