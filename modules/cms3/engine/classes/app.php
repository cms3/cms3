<?php

namespace CMS3\Engine;

class App {

	public $document = NULL;
	
	public $modules = array();
	
	public $language;
	
	protected $_params;
	
	protected $_filters;
	
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
/*
	protected function _build_filter_tree($params)
	{
		$result = array();

		foreach ($params['filter'] as $param => $value)
		{
			$parts = explode('.', $param);

			if (count($parts) >= 2)
			{
				//$parent =
			}
		}

		return $result;
	}
	*/

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
			$parts = explode('.', $param);
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
				$name = implode('.', $parts);
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
			$parts = explode('.', $param);
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
			$parts = explode('.', $path);
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
			$connect_modules[$module->name] = MODPATH . $module->name;
		}
		Core::modules($connect_modules);
		//Cache::$default = $this->get_cfg('default_caching_driver');

		$this->_set_default_routes();
		
		$route_list = Model::factory('route')->query()->select();
		foreach ($route_list as $route)
		{
			$parse = $this->_replace_inline_route($route->format);
			Route::set($route->id, $parse[0], $parse[1]);
		}
		
		if (! \Security::token())
		{
			\Security::token(TRUE);
		}
		
		if (isset($benchmark))
		{
			\Profiler::stop($benchmark);
		}
	}

	private function _set_default_routes()
	{
		$action_defaults = array(
			'controller'		=> 'cms3\engine\app',
			'action'			=> 'call',
			'call_path'			=> '',
		);
		
		Route::set('action',
			$this->get_cfg('route_action'),
			array('call_path' => '([a-zA-Z0-9_/-])*', 'params' => '.*'))
			->defaults($action_defaults);
		
		$defaults = array(
			'controller'	=> 'cms3\engine\app',
			'action'		=> 'display',
			'path'			=> '',
			'language'		=> $this->get_cfg('default_language'),
			'format'		=> $this->get_cfg('default_output_format'),
			'params'		=> '',
		);
		
		$lang_codes = array_keys($this->_languages->as_array('short_code'));
		
		$lang_regexp = '(' . implode('|', $lang_codes) . ')';

		// TODO: разные поддомены для языков
		Route::set('default',
			$this->get_cfg('route_default'),
			array('path' => '([a-zA-Z0-9_/-])*', 'format' => '[a-zA-Z]*', 'language' => $lang_regexp, 'params' => '.*'))
			->defaults($defaults);
	}

	public function dispatch_action($controller, $action) // TODO
	{
		$params = $this->fetch_query_params();
		if ($action == 'finish_auth')
		{
			foreach ($_GET as $key => $value)
			{
				$parts = explode('.', $key);
				if (isset($parts[1]))
				{
					$_GET[$parts[0] . '_' . $parts[1]] = $value;
				}
			}
		}

		$controller = Controller::factory($controller);
		if ($controller)
		{
			$controller->action($action, $params);
		}
		else
		{
			throw new \HTTP_Exception_404('Controller :controller not found.', array(
				':controller' => $controller,
			));
		}
	}

	private function _replace_inline_route($uri)
	{
		$regex = array();
		
		// Find inline regex and remove it
		if (preg_match_all('/<(.+?):(.+?)>/', $uri, $matches, PREG_SET_ORDER))
		{
			$replace = array();

			foreach ($matches as $match)
			{
				list($search, $segment, $exp) = $match;

				// Add the regex for this segment
				$regex[$segment] = $exp;

				// Add the replacment for this segment
				$replace[$search] = '<'.$segment.'>';
			}

			// Remove all inline regex
			$uri = strtr($uri, $replace);
		}
		
		return array($uri, $regex);
	}
  
	public function dispatch($path, $language, $format)
	{
		if (Core::$profiling === TRUE)
		{
			$benchmark = \Profiler::start(get_class($this), __FUNCTION__);
		}
		//$get_params = Request::current()->param('params');
		
		$get_params = $this->fetch_query_params();

		$lang_list = $this->_languages->as_array('short_code');

		if (! empty($language) && isset($lang_list[$language]))
		{
			$this->set_language($lang_list[$language]['code']);
		}
		else
		{
			$this->set_language($this->get_cfg('default_language'));
		}
		Request::current()->set_params(array());
		$route_list = Model::factory('route')->query()->select();
		foreach ($route_list as $route)
		{
			$parse = $this->_replace_inline_route($route->format);
			Route::set($route->id, $parse[0], $parse[1]);
		}
		$routes = Route::all();
		unset($routes['default']);
		unset($routes['action']);
		
		$this->document = Document::factory($format);
		$this->document->language = $this->language;
		$this->document->charset = Core::$charset;

		$found = FALSE;

		foreach ($routes as $name => $route)
		{
			if ($params = $route->matches($path))
			{
				unset($params['action']);
				$params = $this->explode_request_params($params);
				
				Request::current()->set_params($params + $get_params);
				
				$found = TRUE;
				break;
			}
		}
		
		if (! $found && $path != '')
		{
			throw new HTTP_Exception_404();
		}

		// TODO: единый интерфейс вызова
		$this->_params = $this->_build_params_tree(Request::current()->param());
		$this->_filters = $this->_build_filter_tree(Request::current()->param());
		
		$this->document->current_theme = $this->_detect_theme();
		
		$this->document->render();
		
		if (isset($benchmark))
		{
			\Profiler::stop($benchmark);
		}
		
		if (Request::current()->param('profile')) // TODO
		{
			echo new \View('profiler/stats');
		}
	}
	
	protected function _detect_theme()
	{
		$themes = Model_Theme::factory()->query()->select();
		
		foreach ($themes as $theme)
		{
			if (empty($theme->condition->id))
			{
				continue;
			}
			if (App::check_page_condition($theme->condition->condition))
			{
				return $theme->name;
			}
		}
		return $this->get_cfg('default_theme');
	}
	
	public function fetch_query_params()
	{
		$params = array();
		$request = explode('?', $_SERVER['REQUEST_URI']);
		if (isset($request[1]))
		{
			$query_parts = explode('&', $request[1]);
			foreach ($query_parts as $part)
			{
				$part = explode('=', $part);
				$params[$part[0]] = @$part[1];
			}
			$_SERVER['QUERY_STRING'] = $request[1]; // TODO
		}
		$_GET = $params; // TODO!
		//$_REQUEST = $params + $_POST; // TODO!
		return $params + $_POST;
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
		$expression = new Expression_Calc_PHP();
		/*
		$expression = new Expression();

		//TODO: ужасный костыль
		$parsed_params = array();
		foreach ($params as $name => $value)
		{
			$name = str_replace('.', '_', $name);
			$parsed_params[$name] = $value;
		}
		$params = $parsed_params;
		*/
		return $expression->evaluate($condition, $params) != '';
	}

	public function explode_request_params($params)
	{
		return $this->modify_request_params($params, "explode");
	}

	public function implode_request_params($params)
	{
		return $this->modify_request_params($params, "implode");
	}

	//TODO
	protected function modify_request_params($params, $function)
	{
		/*
		$used_components = array();
		
		// Только те компоненты, переменные которых используются в выражениях
		foreach ($params as $key => $value)
		{
			$parts = explode("_", $key);
			if (in_array($parts[0], $this->component_list) && ! in_array($parts[0], $used_components))
			{
				$used_components[] = $parts[0];
			}
		}

		$used_components = $this->component_list;
		
		$function = $function . "_params";
		foreach ($used_components as $component)
		{
			$params = Component::instance($component)->$function($params);
		}*/
		return $params;
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
		$params = $this->implode_request_params($params);
		$path = Route::get($route_id)->uri($params);

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

		$uri = Route::get("default")->uri(array(
			"path" => $path,
			"language" => $language,
			"format" => $format,
		));
		
		return URL::site($uri);
	}

	// TODO
	public function redirect($url, $message = '', $type = 'info')
	{
		// TODO: парсить параметры url
		if ($message != '')
		{
			$url .= '?message=' . urlencode(__($message));
		}
		Request::current()->redirect($url);
	}
}