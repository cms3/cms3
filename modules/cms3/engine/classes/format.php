<?php

namespace CMS3\Engine;

abstract class Format {

	public $ext = NULL;

	abstract public function convert($data);
	
	public static function factory($format)
	{
		$class = NS::add_namespace('Format_' . ucfirst($format), 'CMS3\Engine');
		$obj = new $class();

		return $obj;
	}
}
