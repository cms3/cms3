<?php

namespace CMS3\Engine;

class Config_File_Reader implements \Kohana_Config_Reader {

	/**
	 * The directory where config files are located
	 * @var string
	 */
	protected $_directory = '';

	/**
	 * Creates a new file reader using the given directory as a config source
	 *
	 * @param string Configuration directory to search
	 */
	public function __construct($directory = 'config')
	{
		// Set the configuration directory name
		$this->_directory = trim($directory, '/');
	}

	public function load($group)
	{
		$config = array();

		$module = NS::extract_module_name($group);
		$ns = NS::extract_namespace($group);
		
		$dir = $module . DIRECTORY_SEPARATOR . $this->_directory . DIRECTORY_SEPARATOR . $ns;
		
		if ($files = \CMS3::find_file($dir, $module, NULL, TRUE))
		{
			foreach ($files as $file)
			{
				// Merge each file to the configuration array
				$config = \Arr::merge($config, \CMS3::load($file));
			}
		}

		return $config;
	}

}
