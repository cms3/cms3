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

	public static function compile($uri, array $regex = NULL)
	{
		if ( ! is_string($uri))
			return;

		$uri = str_replace('.', ',', $uri); // TODO: хак

		return parent::compile($uri, $regex);
	}

}