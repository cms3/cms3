<?php

namespace CMS3\Template;

use CMS3\Engine\Template_Engine;
use CMS3\Engine\Template_Engine_Interface;
 
class Engine_Phptal extends Template_Engine implements Template_Engine_Interface {
	
	const EXT = 'html';
	
	public function render($content, array $vars = array())
	{
		require_once \CMS3::find_file('vendor', 'phptal/PHPTAL');
		
		$tal = \PHPTAL::create();
		$tal->setOutputMode(\PHPTAL::XHTML); // to config
		$tal->setSource($content);
		
		$translator = new Engine_Phptal_Translator();
		$tal->setTranslator($translator);
		
		foreach ($vars as $key => $value)
		{
			$tal->set($key, $value);
		}
		
		try
		{
			return $tal->execute();
		}
		catch (Exception $e)
		{
			return $e;
		}
	}
}
