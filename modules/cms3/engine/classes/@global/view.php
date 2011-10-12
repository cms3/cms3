<?php

class View extends \Kohana_View {
	
	public function set_filename($file)
	{
		if (($path = \CMS3::find_entity_file($file, NULL, 'views')) === FALSE)
		{
			throw new Kohana_View_Exception('The requested view :file could not be found', array(
				':file' => $file,
			));
		}

		// Store the file path locally
		$this->_file = $path;

		return $this;
	}
}