<?php

namespace CMS3\Engine;

class App {

	public $document = NULL;
	
	public $modules = array();

	public $language;

	protected $_params;

	protected $_filters;

	protected $_pagination;

	private $_languages = array();

	private $_config;
	
	protected static $_instance;

	public static function instance()
	{
		if (static::$_instance == NULL)
		{
			static::$_instance = new static();
		}
		
		return static::$_instance;
	}

	public function initialize()
	{
		Core::$caching = TRUE; // TODO
		if (Core::$profiling === TRUE)
		{
			$benchmark = \Profiler::start(get_class($this), __FUNCTION__);
		}
		
		Core::$config->attach(new Config_File_Reader);
		
		$this->_config = \CMS3::$config->load('cms3\core');
	
		\Cookie::$salt = $this->get_cfg('cookie_salt');
  		
		date_default_timezone_set($this->get_cfg('timezone'));
		$this->set_language($this->get_cfg('default_language'));

		Core::$base_url = $this->get_cfg('base_url');
		Core::$index_file = $this->get_cfg('index_file');

		$this->_languages = Model::factory('language')->query()
			->where('active', '=', 1)
			->select();
		
		if (! count($this->_languages))
		{
			throw new Exception('No active languages');
		}
		
		$this->modules = Model::factory('module')->query()
			->where('enabled', '=', 1)
			->select();
		
		$connect_modules = array();
		foreach ($this->modules as $module)
		{
			$connect_modules[$module->name] = MODPATH . str_replace(NS::DELIMITER, DIRECTORY_SEPARATOR, $module->name);
		}
		Core::modules($connect_modules);

		if (! \Security::token())
		{
			\Security::token(TRUE);
		}
		
		if (isset($benchmark))
		{
			\Profiler::stop($benchmark);
		}
	}
  
	public function dispatch($controller = NULL, $action = NULL, $language = NULL, $format = NULL)
	{
		if (Core::$profiling === TRUE)
		{
			$benchmark = \Profiler::start(get_class($this), __FUNCTION__);
		}

		$lang_list = $this->_languages->as_array('short_code');

		if (! empty($language) && isset($lang_list[$language]))
		{
			$this->set_language($lang_list[$language]['code']);
		}
		else
		{
			$this->set_language($this->get_cfg('default_language'));
		}
		if (empty($format))
		{
			$format = $this->get_cfg('default_output_format');
		}

		$this->document = Document::factory($format);
		$this->document->language = $this->language;
		$this->document->charset = Core::$charset;
		$this->document->current_theme = $this->_detect_theme();

        $this->_params = $this->_build_params_tree(Request::current()->param());
        $this->_filters = $this->_build_filter_tree(Request::current()->param());
        $this->_pagination = $this->_build_pagination();

		if (! empty($controller))
		{
			$controller = Controller::factory($controller);
			if ($controller)
			{
				$controller->action($action, Request::current()->param());
			}
			else
			{
				throw new \HTTP_Exception_404('Controller :controller not found.', array(
					':controller' => $controller,
				));
			}
		}
		else
		{
			$this->document->render();
		}
		
		if (isset($benchmark))
		{
			\Profiler::stop($benchmark);
		}
		
		if (@$_REQUEST['profile']) // TODO
		{
			echo new \View('profiler/stats');
		}
		
		// TODO!
		Autoloader::deinit();
		exit;
	}
	
	protected function _detect_theme()
	{
		$themes = Model_Theme::factory()->query()->select_all();
		
		foreach ($themes as $theme)
		{
			if (! $theme->condition->loaded() || App::check_page_condition($theme->condition->condition))
			{
				return $theme->name;
			}
		}
		return $this->get_cfg('default_theme');
	}

	public function set_language($language)
	{
		$language = strtolower($language);
		$this->language = $language;
		\I18n::$lang = $language;
		setlocale(LC_ALL, $language . '.' . Core::$charset);
	}

	public static function check_page_condition($condition)
	{
		$condition = trim($condition);
		if (! $condition)
		{
			return TRUE;
		}

		$params = Request::current()->param();
		unset($params['session']); // TODO
		$params['_count'] = count($params);
		$expression = new Expression_Calc_PHP();

		return $expression->evaluate($condition, $params) != '';
	}

	public function get_cfg($param)
	{
		$param = strtolower($param);
		if (isset($this->_config[$param]))
		{
			return $this->_config[$param];
		}
		else
		{
			return NULL;
		}
	}

	public function get_uri($route_id, $params, $format = NULL, $language = NULL)
	{
		//$path = Route::get($route_id)->uri($params); TODO
		$path = implode('&', $params);

		return $this->expand_uri($path, $format, $language);
	}

	public function expand_uri($path, $format = NULL, $language = NULL)
	{
		if ($language == NULL)
		{
			$lang_list = $this->_languages->as_array('code');
			$language = $lang_list[$this->language]['short_code'];
		}
		
		if (! $this->get_cfg('always_show_uri_language'))
		{
			$lang_list = $this->_languages->as_array('short_code');
			if (strtolower($lang_list[$language]['code']) == strtolower($this->get_cfg('default_language')))
			{
				$language = NULL;
			}
		}

		/*
		$uri = Route::get('default')->uri(array(
			'path' => $path,
			'language' => $language,
			'format' => $format,
		));
		*/
		$uri = $path;
		
		return URL::site($uri);
	}

	public function filter($module = NULL, $model = NULL)
	{
		if ($module !== NULL)
		{
			if ($model !== NULL)
			{
				return @($this->_filters[$module][$model]);
			}
			else
			{
				return @($this->_filters[$module]);
			}
		}

		return $this->_filters;
	}

	public function pagination($module = NULL, $model = NULL)
	{
		if ($module !== NULL)
		{
			if ($model !== NULL)
			{
				return @($this->_pagination[$module][$model]);
			}
			else
			{
				return @($this->_pagination[$module]);
			}
		}

		return $this->_pagination;
	}

	// TODO: remove it from here
	public function param($module = NULL, $model = NULL)
	{
		// TODO: !!!
		if ($module !== NULL)
		{
			if ($model !== NULL)
			{
				return @($this->_params[$module][$model]);
			}
			else
			{
				return @($this->_params[$module]);
			}
		}

		return $this->_params;
	}

	// TODO: remove it from here
	protected function _build_params_tree($params)
	{
		$result = array();
		foreach ($params as $param => $value)
		{
			if (is_array($value))
			{
				continue;
			}
			$parts = explode(URL::PART_DELIMITER, $param);
		 	if (count($parts) >= 2)
		 	{
				$parent = &$result;
				$name = array_shift($parts);
				$i = 0;
				while (count($parts) && $i < 2) // TODO: некрасиво
				{
					$parent[$name] = array();
					$parent =& $parent[$name];
					$name = array_shift($parts);
					$i++;
				}
				array_unshift($parts, $name);
				$name = implode(URL::PART_DELIMITER, $parts);
				$parent[$name] = $value;
		 	}
		 	else
		 	{
				$result['@global'][$param] = $value;
		 	}
		}

		return $result;
	}

	protected function _build_filter_tree($params)
	{
		$result = array();

		foreach ($params as $param => $value)
		{
			$parts = explode(URL::PART_DELIMITER, $param);
		 	if (count($parts) >= 3 && strpos($param, '[') === FALSE ) // TODO
		 	{
				$module = array_shift($parts);
				$model = array_shift($parts);
				$field = implode('.', $parts);
				$result[$module][$model][$field]['filter'] = $value;
		 	}
		}

		$ordering = (array)@$_REQUEST['ordering']; // TODO
		foreach ($ordering as $path => $order)
		{
			$parts = explode(URL::PART_DELIMITER, $path);
			if (count($parts) >= 2)
			{
				$module = $parts[0];
				$model = $parts[1];

				@list($field, $dir) = explode(',', $order);
				if (! empty($field))
				{
					if (! in_array(strtolower($dir), array('asc', 'desc')))
					{
						$dir = 'asc';
					}

					$result[$module][$model][$field]['ordering'] = $dir;
				}
			}
		}

		return $result;
	}

	protected function _build_pagination()
	{
		$result = array();

		$offset = (array)@$_REQUEST['offset']; // TODO
		foreach ($offset as $path => $value)
		{
			$parts = explode(URL::PART_DELIMITER, $path);
			if (count($parts) >= 2)
			{
				$module = $parts[0];
				$model = $parts[1];

				$result[$module][$model]['offset'] = $value;
			}
		}

		$limit = (array)@$_REQUEST['limit']; // TODO
		foreach ($limit as $path => $value)
		{
			$parts = explode(URL::PART_DELIMITER, $path);
			if (count($parts) >= 2)
			{
				$module = $parts[0];
				$model = $parts[1];

				$result[$module][$model]['limit'] = $value;
			}
		}

		return $result;
	}

	// TODO: убрать это отсюда
	// TODO: переписать этот говнокод
	public function ordering($model = NULL)
	{
		$parse = function ($order)
		{
			@list($column, $dir) = explode(',', $order);
			$result = array(
				'column' => $column,
				'dir'    => $dir
			);

			return $result;
		};
		$ordering = (array)@$_REQUEST['ordering'];

		if (! empty($model))
		{
			$ordering = $parse(@$ordering[strtolower($model)]);
		}
		else
		{
			foreach ($ordering as $what => $order)
			{
				$ordering[$what] = $parse($order);
			}
		}

		return $ordering;
	}
}