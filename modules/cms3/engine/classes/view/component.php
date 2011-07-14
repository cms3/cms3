<?php

namespace CMS3\Engine;

use CMS3\Engine\NS;

class View_Component extends View {
		
	protected $_component = NULL;
	
	protected static function capture($view_filename, array $view_data = array(), $component = NULL)
	{
		$template = $view_filename;
		if (($namespace = NS::extract_namespace($component)) && ! NS::extract_namespace($template))
		{
			$template = NS::add_namespace($template, $namespace);
		}
		
		return Template::display($template, $view_data);
	}	
	
	public function set_component($component)
	{
		$this->_component = $component;
		return $this;
	}
	
	public function render($file = NULL)
	{
		if ($file !== NULL)
		{
			$this->set_filename($file);
		}
		if (empty($this->_file))
		{
			throw new View_Exception('You must set the file to use within your view before rendering');
		}
		if (empty($this->_component))
		{
			throw new View_Exception('View_Component must be connected to a component');
		}

		// Combine local and global data and capture the output
		return static::capture($this->_file, $this->_data + \View::$_global_data, $this->_component);
	}
}
