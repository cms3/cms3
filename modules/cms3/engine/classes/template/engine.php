<?php

namespace CMS3\Engine;

use CMS3\Engine\NS;

abstract class Template_Engine implements Template_Engine_Interface  {

	const CLASS_PREFIX = 'Engine_';
	
	const NAME_SPACE = 'CMS3\Template';
	
	const EXT = NULL;
	
	protected $_settings = array
	(
		'engine'		=> NULL,
		'theme'			=> NULL,
		'template'		=> NULL,
		'filename'		=> NULL,
		'real_path'		=> NULL,
		'url_path'		=> NULL
	);
	
	public static function factory($name)
	{
		$class = NS::add_class_prefix(ucfirst($name), self::CLASS_PREFIX);
		$class = NS::add_namespace($class, self::NAME_SPACE);
		$obj = new $class();

		return $obj;
	}
	
	public function template($name, array $vars = array())
	{
		if (NS::have_namespace($this->settings('template')) && ! NS::have_namespace($name))
		{
			$namespace = NS::extract_namespace($this->settings('template'));
			$name = NS::add_namespace($name, $namespace);
		}
		
		return Template::display($name, $vars);
	}
	
	public function renderer($name, array $params = array())
	{
		return Renderer::display($name, $params);
	}
	
	public function name()
	{
		$class_name = NS::extract_class_name(get_class($this));
		$name = NS::remove_class_prefix($class_name, self::CLASS_PREFIX); 
		
		return $name;
	}
	
	public function ext()
	{
		return static::EXT;
	}
	
	public function settings($key = NULL)
	{
		if ($key === NULL)
		{
			return $this->_settings;
		}
		elseif (is_array($key))
		{
			$this->_settings = $key;
		}
		elseif (isset($this->_settings[$key]))
		{
			return $this->_settings[$key];	
		}
		else
		{
			return NULL;
		}
	}
}
