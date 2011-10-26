<?php

namespace CMS3\Engine;

class Document_Media  {

	protected $_list = array();
	
	protected $_links = array();
	
	protected $_files = array();
	
	public function link($type, $url, array $params = NULL, $unique = FALSE, $position = 'default')
	{
		if ($unique && isset($this->_links[$type][$url]))
		{
			return $this->_links[$type][$url];
		}
	
		$obj = Document_Media_Object::factory($type);
		$obj->url = $url;
		$obj->params = (array)$params;
		$this->_add($type, $obj, $position);
		
		$this->_links[$type][$url] = TRUE;

		return $obj;
	}
	
	public function file($type, $filename, $namespace = NULL, array $params = NULL, $unique = FALSE, $position = 'default')
	{
		if ($unique && isset($this->_files[$type][$url]))
		{
			return $this->_files[$type][$url];
		}
		
		$real_file = NULL;
		$paths = \CMS3::get_possible_paths($namespace, 'media'); // TODO: использовать find_entity_file
		foreach ($paths as $path)
		{
			$file = $path . DIRECTORY_SEPARATOR . strtolower($type) . DIRECTORY_SEPARATOR . $filename;
			if (is_file($file))
			{
				$real_file = $file;
				break;
			}
		}
		if (empty($real_file))
		{
			return FALSE;
		}
	
		$url = URL::real_to_site($real_file);
		
		$this->_files[$type][$filename] = TRUE;

		return $this->link($type, $url, $params, $unique, $position);
	}
	
	public function content($type, $content, array $params = NULL, $position = 'default')
	{
		$obj = Document_Media_Object::factory($type);
		$obj->content = $content;
		$obj->params = (array)$params;
		$this->_add($type, $obj, $position);

		return $obj;
	}
	
	public function get($type = NULL, $position = NULL)
	{
		if ($type == NULL)
		{
			return $this->_list;
		}
		elseif ($position == NULL)
		{
			return isset($this->_list[$type]) ? $this->_list[$type] : array();
		}
		else {
			return isset($this->_list[$type][$position]) ? $this->_list[$type][$position] : array();
		}
	}
	
	protected function _add($type, Document_Media_Object $obj, $position)
	{
		$this->_list[strtolower($type)][strtolower($position)][] = $obj;
	}
}