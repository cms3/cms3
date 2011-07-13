<?php

namespace CMS3\Engine;

class View extends \View {

	public static function factory($file = NULL, array $data = NULL)
	{
		return new static($file, $data);
	}
	
	protected static function capture($view_filename, array $view_data = array())
	{
		return Template::display($view_filename, $view_data);
	}	
	
	public function set_filename($file)
	{
		$this->_file = $file;
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

		// Combine local and global data and capture the output
		return static::capture($this->_file, $this->_data + \View::$_global_data);
	}
	
	public function prepare($data)
	{
		$this->_data = $this->prepare_data($data);
		return $this;
	}
	
	protected function prepare_data($data) {}
}
