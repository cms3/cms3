<?php

namespace CMS3\Engine;

class URL extends \Kohana_URL {

	public static function current()
	{
		return static::site(Request::current()->uri(), TRUE);
	}

}