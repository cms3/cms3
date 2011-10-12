<?php

namespace CMS3\Engine;

class Response extends \Response {

	public static function factory(array $config = array())
	{
		return new static($config);
	}
}