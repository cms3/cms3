<?php

namespace CMS3\Engine;

abstract class Document_Media_Renderer_HTML extends Document_Media_Renderer {
	
	protected function _clean_attrs($attrs, array $single = array())
	{
		foreach ($single as $i => $name)
		{
			$single[$i] = strtolower($i);
		}
		$non_empty = array();
		
		foreach ($attrs as $name => $value)
		{
			if ($value != NULL)
			{
				$non_empty[$name] = $value;
			}
			else if (in_array(strtolower($name), $single))
			{
				$non_empty[$name] = $name;
			}
		}
	
		return $non_empty;
	}
	
	protected function _attrs()
	{
		return $this->_clean_attrs($this->_media->params);
	}
}