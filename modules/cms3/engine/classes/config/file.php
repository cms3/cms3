<?php

namespace CMS3\Engine;

class Config_File extends \Config_Reader {

	// Configuration group name
	protected $_configuration_group;

	// Has the config group changed?
	protected $_configuration_modified = FALSE;

	public function __construct($directory = 'config')
	{
		// Set the configuration directory name
		$this->_directory = trim($directory, '/');

		// Load the empty array
		parent::__construct();
	}

	public function load($group, array $config = NULL)
	{
		$parts = explode('\\', $group);
		$module = array_pop($parts);
		$ns = array_shift($parts);
		
		$dir = $module . DIRECTORY_SEPARATOR . $this->_directory . DIRECTORY_SEPARATOR . $ns;
		
		if ($files = \CMS3::find_file($dir, $module, NULL, TRUE))
		{
			// Initialize the config array
			$config = array();

			foreach ($files as $file)
			{
				// Merge each file to the configuration array
				$config = \Arr::merge($config, \CMS3::load($file));
			}
		}

		return parent::load($group, $config);
	}

}
