<?php

namespace CMS3\Template;

use CMS3\Engine\Template;
 
class Phptal extends Template {
	
	protected static $_ext = '.html';
	
	public function render_content($content, array $vars = array())
	{
		require_once \CMS3::find_file('vendor', 'phptal/PHPTAL');
		
		$tal = \PHPTAL::create();
		$tal->setOutputMode(\PHPTAL::XHTML); // to config
		$tal->setSource($content);
		
		$translator = new Phptal_Translator();
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
