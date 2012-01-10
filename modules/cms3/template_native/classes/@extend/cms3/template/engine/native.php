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
		/*
		$filename = DOCROOT . 'tmp.php';
		file_put_contents($filename, $content);
		include($filename);
		*/
		$profiling = \CMS3::$profiling === TRUE;
		if ($profiling)
		{
			$benchmark = \Profiler::start(get_called_class(), __FUNCTION__ . '[eval]');
		}
		eval('?>' . $content);
		if ($profiling)
		{
			\Profiler::stop($benchmark);
		}
		$contents = ob_get_contents();
		
		ob_end_clean();
		
		return $contents;
	}

}
