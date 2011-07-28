<?php

namespace CMS3\Template;

use CMS3\Engine\Template_Engine;
use CMS3\Engine\Template_Engine_Interface;
 
class Engine_Native extends Template_Engine implements Template_Engine_Interface {

	const EXT = 'php';

	public function render($content, array $vars = array())
	{
		foreach ($vars as $var_name => $var_value)
		{
			$this->$var_name = $var_value;
		}

		ob_start();
		
		eval('?>' . $content);
		$contents = ob_get_contents();
		
		ob_end_clean();
		
		return $contents;
	}

}
