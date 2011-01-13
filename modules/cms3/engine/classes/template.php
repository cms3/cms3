<?php

namespace CMS3\Engine;
 
abstract class Template {

	protected static $_ext = '';

	public $_current_theme;
	
	protected $_engine;
	
	protected $_theme_paths = array();
	
	protected $_tpl_paths = array();
	
	protected $_buffer = NULL;
	
	public function __construct()
	{
		$this->_theme_paths = self::_get_theme_paths();
		$this->_engine = NS::extract_class_name(get_class($this));
	}
	
	public function render_content($content, $data = array()) {}
	
	public static function factory($engine)
	{
		$class = NS::add_namespace(ucfirst($engine), 'CMS3\Template');
		$obj = new $class();

		return $obj;
	}
	
	public static function render($template, array $vars = array(), array $paths = array())
	{
		$theme = App::instance()->document->current_theme;
		$format = App::instance()->document->format;
		
		$engine = static::detect_engine($theme, $template, $format, $paths, $filename);
		if ($engine == NULL)
		{
			throw new Exception('Invalid theme :theme', array(':theme' => $theme)); 
		}
		
		$inst = static::factory($engine);
		$inst->_current_theme = $theme;
		$inst->_tpl_paths = $paths;
		
		return $inst->display($template, $format, $vars, $filename);
	}
	
	public function display($name, $format = NULL, $vars = array(), $filename = NULL)
	{
		if ($format === NULL)
		{
			$format = App::instance()->document->format;
		}
		
		if ($filename === NULL)
		{
			$filename = $this->_get_filename($name, $format);
		}
		if ($filename === FALSE)
		{
			throw new View_Exception('The requested template :file could not be found', array(':file' => $name));
		}

		$tpl = file_get_contents($filename);

		$content = $this->_parse_renderers($tpl);
		$content = $this->render_content($content, $vars);
		
		return $content;
	}
	
	protected static function _get_theme_paths()
	{
		return array(
			APPPATH . 'themes' . DIRECTORY_SEPARATOR,
			THEMESPATH
		);
	}
	
	protected function _parse_renderers($data)
	{
		$replace = array();
		$matches = array();
		
		if (preg_match_all('#<cms3:include\ renderer="([^"]+)" (.*)\/>#iU', $data, $matches))
		{
			$matches[0] = array_reverse($matches[0]);
			$matches[1] = array_reverse($matches[1]);
			$matches[2] = array_reverse($matches[2]);

			$count = count($matches[1]);

			for($i = 0; $i < $count; $i++)
			{
				$attribs = $this->_parse_attributes( $matches[2][$i]);
				$renderer  = $matches[1][$i];

				$name  = isset($attribs['name']) ? $attribs['name'] : NULL;
				$replace[$i] = $this->_get_buffer($renderer, $name, $attribs);
			}

			$data = str_replace($matches[0], $replace, $data);
		}

		return $data;
	}
	
	protected function _parse_attributes($string)
	{
		$attr	= array();
		$result	= array();

		preg_match_all('/([\w:-]+)[\s]?=[\s]?"([^"]*)"/i', $string, $attr);

		if (is_array($attr))
		{
			$count = count($attr[1]);
			for($i = 0; $i < $count; $i++)
			{
				$result[$attr[1][$i]] = $attr[2][$i];
			}
		}
		return $result;
	}
	
	protected function _get_buffer($renderer = NULL, $name = NULL, $params = array())
	{
		$result = NULL;

		if ($renderer === NULL)
		{
			return $this->_buffer;
		}
		
		if (isset($this->_buffer[$renderer][$name]))
		{
			$result = $this->_buffer[$renderer][$name];
			if ($result === FALSE)
			{
				return NULL;
			}
		}
		
		$renderer = $this->_load_renderer($renderer);
		if (is_object($renderer))
		{
			$result = $renderer->render($name, $params);
		}	

		return $result;
	}

	protected function _load_renderer($type)
	{
		$class = NS::add_namespace('Renderer_' . ucfirst($type), 'CMS3\Engine');

		if (! class_exists($class))
		{
			throw new Exception('Unable to load renderer class :class', array(':class' => $class));
		}

		$instance = new $class($this);
		
		return $instance;
	}
	
	public static function detect_engine($theme, $template, $format, $tpl_paths, &$filename_out)
	{
			
		$engines = array();
		$search_paths = array();
		$paths = static::_get_theme_paths();
		
		foreach ($paths as &$path)
		{
			$path .= strtolower($theme) . DIRECTORY_SEPARATOR;
		}
		$theme_paths = array_merge($paths, $tpl_paths);
		
		foreach ($theme_paths as $theme_path)
		{
			$tpl_path = $theme_path  . "templates";
			
			if (! is_dir($tpl_path)) continue;

			$list = scandir($tpl_path);
						
			foreach ($list as $dir)
			{
				if ($dir != '.' && $dir != '..')
				{
					$search_path = $tpl_path . DIRECTORY_SEPARATOR . $dir;
					
					if (is_dir($search_path))
					{
						$class = NS::add_namespace(ucfirst($dir), 'CMS3\Template');
						if (! class_exists($class)){
							continue;
						}
						
						$tpl_ext = $class::get_ext();
						$filename = $search_path . DIRECTORY_SEPARATOR . $format . DIRECTORY_SEPARATOR . $template . '.' . $tpl_ext;
		
						if (is_file($filename))
						{
							$filename_out = $filename;
							return $dir;
						}
					}
				}
			}
		}
		
		/*
		$infofile = \CMS3::find_file(strtolower($theme), "theme", "txt", FALSE, self::_get_paths());
		
		if (! is_file($infofile))
		{
			return NULL;
		}
		else 
		{
			return file_get_contents($infofile);
		}
		*/
		return NULL;
	}
	
	public static function get_ext()
	{
		return static::$_ext;
	}
	
	private function _get_paths()
	{
		$paths = $this->_theme_paths;
		foreach ($paths as &$path)
		{
			$path .= strtolower($this->_current_theme) . DIRECTORY_SEPARATOR;
		}
		return array_merge($paths, $this->_tpl_paths);
	}
	
	protected function _get_filename($tpl_name, $format = 'html')
	{
		$dir = 'templates' . DIRECTORY_SEPARATOR . strtolower($this->_engine) .  DIRECTORY_SEPARATOR . strtolower($format);
		$paths = $this->_get_paths();

		return \CMS3::find_file($dir, strtolower($tpl_name), static::$_ext, FALSE, $paths);
	}
}