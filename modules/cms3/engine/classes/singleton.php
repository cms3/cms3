<?php

/**
 * Singleton pattern implementation
 *
 * @package		CMS 3.0
 * @category	Engine
 */

namespace CMS3\Engine;

abstract class Singleton {

	/**
	* Single object instance
	* 
	* @var	string
	*/
	private static $_instance = NULL;
	
	/**
	* Get instance of class
	*
	* @return	object
	*/
	public static function instance()
	{
		if (static::$_instance === NULL)
		{
			static::$_instance = new static();
		}
		return static::$_instance;
	}
	
	/**
	* Protected constructor
	*/
	protected function __construct(){}
	
	/**
	* Private final clone method 
	*/
	final private function __clone(){}
}