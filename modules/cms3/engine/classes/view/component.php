<?php

namespace CMS3\Engine;

class View_Component extends \Kohana_View {
		
	protected $_component = NULL;

	public static function factory($file = NULL, array $data = NULL)
	{
		return new static($file, $data);
	}
	
	protected static function capture($kohana_view_filename, array $kohana_view_data, $component = NULL)
	{
		$path = \MODPATH . strtolower($component) . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR;
		return Template::render($kohana_view_filename, $kohana_view_data, array($path));
	}	
	
	public function set_filename($file)
	{
		$this->_file = $file;
		return $this;
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
			throw new Exception('View_Component must be connected to a component');
		}

		// Combine local and global data and capture the output
		return static::capture($this->_file, $this->_data + \View::$_global_data, $this->_component);
	}
	
	public function prepare($data)
	{
		$this->_data = $this->prepare_data($data);
		return $this;
	}
	
	protected function prepare_data() {}
}
