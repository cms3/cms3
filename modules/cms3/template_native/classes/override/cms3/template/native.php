<?php

namespace CMS3\Template;

use CMS3\Engine\Template;
 
class Native extends Template {
	
	protected static $_ext = 'php';

	public function render_content($content, $vars = array())
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