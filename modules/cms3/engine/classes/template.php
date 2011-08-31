<?php

/**
 * Class for displaying templates
 * 
 * @package		CMS 3.0
 * @subpackage	Engine
 */

namespace CMS3\Engine;

class Template {
	
	/**
	 * @var  string 
	 */
	public $name = '';
	
	/**
	 * @var  string 
	 */
	public $theme = '';
	
	/**
	 * @var  string 
	 */
	public $format = '';
	
	/**
	 * @var  object 
	 */
	public $engine = NULL;
	
	/**
	 * @var  string 
	 */
	protected $_filename = NULL;
	
	/**
	 * @var  string 
	 */
	protected $_buffer = '';
	
	
	public static function display($name, array $vars = array(), $format = NULL, $theme = NULL)
	{
		$template = new static();
		if ($format !== NULL)
		{
			$template->format = $format;
		}
		if ($theme !== NULL)
		{
			$template->theme = $theme;
		}
	 	$template->load($name);
	 	
	 	return $template->render($vars);
	}
	
	public function __construct()
	{
		$this->format = App::instance()->document->format;
		$this->theme = App::instance()->document->current_theme;
	}
	
	public function load($name)
	{
		$this->name = $name;
		$this->_load_engine();
		if ($this->_filename == NULL)
		{
			$this->_filename = $this->_find_filename();
		}
		if (! is_file($this->_filename))
		{
			throw new Exception('Can not load template :template: file :filename does not exists',
				array(
					':template' => $this->name,
					':filename' => $this->_filename
				)
			); 
		}
		$this->_buffer = file_get_contents($this->_filename);
	}
	
	public function load_from($filename)
	{
		if ($this->engine == NULL)
		{
			throw new Exception('Must set the template engine first for render template file :filename',
				array(':filename' => $filename)
			); 
		}
		$this->_filename = $filename;
		$name = pathinfo($filename, PATHINFO_FILENAME);
		$this->load($name);
	}
	
	public function render(array $vars = array())
	{
		$this->_buffer = $this->_execute_renderers($this->_buffer);
		
		$real_path = pathinfo($this->_filename, PATHINFO_DIRNAME) . DIRECTORY_SEPARATOR;
		$settings = array(
			'engine'		=> $this->engine->name(),
			'theme'			=> $this->theme,
			'template'		=> $this->name,
			'filename'		=> pathinfo($this->_filename, PATHINFO_BASENAME),
			'real_path'		=> $real_path,
			'url_path'		=> URL::real_to_site($real_path)
		);
		$this->engine->settings($settings);
		$content = $this->engine->render($this->_buffer, $vars);
		
		return $content;
	}
	
	protected function _load_engine()
	{
		if ($this->engine == NULL)
		{
			$engine_name = $this->_detect_engine();
			if (! $engine_name)
			{
				throw new Exception('Unable to detect template engine for template :template',
					array(':template' => $this->name)
				); 
			}
			$this->engine = Template_Engine::factory($engine_name);
		}
		return $this->engine;
	}
	
	protected function _detect_engine()
	{
		$paths = $this->_get_possible_paths();
		
		foreach ($paths as $path)
		{
			$iterator = new \DirectoryIterator($path);
			
			foreach ($iterator as $file_info)
			{
				if ($file_info->isDir() && ! $file_info->isDot())
				{
					$engine = $file_info->getFilename();

					$class = NS::add_class_prefix(ucfirst($engine), Template_Engine::CLASS_PREFIX);
					$class = NS::add_namespace($class, Template_Engine::NAME_SPACE);
					
					if (class_exists($class))
					{
						$filename = $this->_make_filename($path, $engine, $class::EXT);
						
						if (is_file($filename))
						{
							$this->_filename = $filename;

							return $engine;
						}
					}
				}
			}
		}

		return FALSE;
	}
	
	protected function _find_filename()
	{
		$paths = $this->_get_possible_paths();

		foreach ($paths as $path)
		{
			$filename = $this->_make_filename($path, $this->engine->name(), $this->engine->ext());
			if (is_file($filename))
			{
				return $filename;
			}
		}
		return FALSE;
	}
	
	protected function _make_filename($dir, $engine_name, $ext)
	{
		$file = NS::extract_class_name($this->name); 
		
		return $dir . DIRECTORY_SEPARATOR . $engine_name . DIRECTORY_SEPARATOR . $this->format . DIRECTORY_SEPARATOR . $file . '.' . $ext;
	}
	
	protected function _get_possible_paths()
	{
		$list = array();
		$namespace = NS::extract_namespace($this->name);
		$paths = \CMS3::get_possible_paths($namespace, 'views');

		//TODO: найти более красивое решение, это похоже на костыль
		$theme_dir = \DOCROOT . 'themes' . DIRECTORY_SEPARATOR . $this->theme . DIRECTORY_SEPARATOR . 'views';
		array_splice($paths, 1, 0, $theme_dir);
		
		foreach ($paths as $path)
		{
			if (is_dir($path))
			{
				$list[] = $path;
			}
		}
		
		return $list;
	}
	
	protected function _execute_renderers($data)
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
				$params = $this->_parse_attributes( $matches[2][$i]);
				$renderer  = $matches[1][$i];
				
				$replace[$i] = Renderer::display($renderer, $params);
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

}