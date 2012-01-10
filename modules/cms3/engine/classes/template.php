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

	/**
	 * @var  array
	 */
	public static $_cache = array();
	
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

	protected function _get_cache_key()
	{
		return  $this->name . '-' . $this->format . '-' . $this->theme;
	}
	
	public function load($name)
	{
		$this->name = $name;

		$cache_key = $this->_get_cache_key();

		if (isset(static::$_cache[$cache_key]))
		{
			$this->engine = static::$_cache[$cache_key]['engine'];
			$this->_filename = static::$_cache[$cache_key]['filename'];
		}

		$this->_load_engine();
		if ($this->_filename == NULL)
		{
			if (isset(static::$_cache[$name]))
			{
				$this->_filename = $this->_cache[$name];
			}
			else
			{
				$this->_filename = $this->_find_filename();
				static::$_cache[$name] = $this->_filename;
			}
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

		static::$_cache[$cache_key] = array(
			'engine' => $this->engine->name(),
			'filename' => $this->_filename
		);

		$profiling = \CMS3::$profiling === TRUE;
		if ($profiling)
		{
			$benchmark = \Profiler::start(get_called_class(), __FUNCTION__ . '[file_get_contents]');
		}
		$this->_buffer = file_get_contents($this->_filename);
		if ($profiling)
		{
			\Profiler::stop($benchmark);
		}
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
		$profiling = \CMS3::$profiling === TRUE;
		if ($profiling)
		{
			$benchmark = \Profiler::start(get_called_class(), __FUNCTION__ . '[file_get_contents]');
		}
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

		if ($profiling)
		{
			\Profiler::stop($benchmark);
		}

		return $content;
	}
	
	protected function _load_engine()
	{
		if ($this->engine == NULL)
		{
			$this->engine = $this->_detect_engine();
			if (! $this->engine)
			{
				throw new Exception('Unable to detect template engine for template :template',
					array(':template' => $this->name)
				); 
			}
		}
		if (is_string($this->engine))
		{
			$this->engine = Template_Engine::factory($this->engine);
		}
		return $this->engine;
	}
	
	protected function _detect_engine()
	{
		return 'native'; // TODO!

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
		$profiling = \CMS3::$profiling === TRUE;
		if ($profiling)
		{
			$benchmark = \Profiler::start(get_called_class(), __FUNCTION__);
		}

		$file = NS::extract_class_name($this->name);
		$name = strtolower($this->engine->name()) . DIRECTORY_SEPARATOR . $this->format . DIRECTORY_SEPARATOR . $file . '.' . $this->engine->ext();

		$theme_path =  \DOCROOT . 'themes' . DIRECTORY_SEPARATOR . $this->theme . DIRECTORY_SEPARATOR . 'views';

		if (is_file($theme_path . DIRECTORY_SEPARATOR . $name))
		{
			$result = $theme_path . DIRECTORY_SEPARATOR . $name;
		}
		else
		{
			$namespace = NS::extract_namespace($this->name);
			$result = Autoloader::find_file_entity($name, $namespace, 'views');
		}

		if ($profiling)
		{
			\Profiler::stop($benchmark);
		}

		return $result;
	}
	
	protected function _make_filename($dir, $engine_name, $ext)
	{
		$file = NS::extract_class_name($this->name); 
		
		return $dir . DIRECTORY_SEPARATOR . $engine_name . DIRECTORY_SEPARATOR . $this->format . DIRECTORY_SEPARATOR . $file . '.' . $ext;
	}
	
	protected function _get_possible_paths()
	{
		$profiling = \CMS3::$profiling === TRUE;
		if ($profiling)
		{
			$benchmark = \Profiler::start(get_called_class(), __FUNCTION__);
		}
		
		$list = array();
		$namespace = NS::extract_namespace($this->name);
		$paths = Autoloader::get_possible_paths($namespace, 'views');

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
		
		if ($profiling)
		{
			\Profiler::stop($benchmark);
		}
		
		return $list;
	}
	
	protected function _execute_renderers($data)
	{

		$reg_result = preg_match_all('#<cms3:include\ (.*)\/>#iU', $data, $matches);

		if ($reg_result)
		{
			$matches[0] = array_reverse($matches[0]);
			$matches[1] = array_reverse($matches[1]);

			$count = count($matches[0]);

			$replace = array();
			$renderers = array();
			for($i = 0; $i < $count; $i++)
			{
				$params = $this->_parse_attributes( $matches[1][$i]);
				if (isset($params['renderer']))
				{
					$renderer = $params['renderer'];
					$priority = @$params['priority'] ?: 0;

					unset($params['renderer']);
					unset($params['priority']);

					$renderers[$i] = array(
						'index' => $i,
						'renderer' => $renderer,
						'priority' => $priority,
						'params' => $params,
					);
				}
				else
				{
					$replace[$i] = $matches[0][$i];
				}
			}

			usort($renderers, function($a, $b)
			{
				$result = (int)$b['priority'] - (int)$a['priority'];
				if ($result == 0)
				{
					$result = $b['index'] - $a['index'];
				}
				return $result;
			});

			foreach ($renderers as $render_data)
			{
				$replace[$render_data['index']] = Renderer::display($render_data['renderer'], $render_data['params']);
			}
			ksort($replace);

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