<?php

namespace CMS3\Engine;

class Request extends \Kohana_Request {

	public function set_param($key, $value)
	{
		$this->_params[$key] = $value;
	}
	
	public function unset_param($key)
	{
		if (isset($this->_params[$key])){
			unset($this->_params[$key]);
		}
	}
	
	public function set_params(array $params)
	{
		$this->_params = $params;
	}
	
	public function execute()
	{
		// Create the class prefix
		$prefix = 'controller_';

		if ($this->directory)
		{
			// Add the directory name to the class prefix
			$prefix .= str_replace(array('\\', '/'), '_', trim($this->directory, '/')).'_';
		}

		if (\CMS3::$profiling)
		{
			// Set the benchmark name
			$benchmark = '"'.$this->uri.'"';

			if ($this !== static::$instance AND static::$current)
			{
				// Add the parent request uri
				$benchmark .= ' « "'.static::$current->uri.'"';
			}

			// Start benchmarking
			$benchmark = \Profiler::start('Requests', $benchmark);
		}

		// Store the currently active request
		$previous = static::$current;

		// Change the current request to this request
		static::$current = $this;

		try
		{
			$class_name = NS::add_class_prefix($this->controller, $prefix);
				
			// Load the controller using reflection
			$class = new \ReflectionClass($class_name);

			if ($class->isAbstract())
			{
				throw new CMS3_Exception('Cannot create instances of abstract :controller',
					array(':controller' => $class_name));
			}

			// Create a new instance of the controller
			$controller = $class->newInstance($this);

			// Execute the "before action" method
			$class->getMethod('before')->invoke($controller);

			// Determine the action to use
			$action = empty($this->action) ? Route::$default_action : $this->action;

			// Execute the main action with the parameters
			$class->getMethod('action_'.$action)->invokeArgs($controller, $this->_params);

			// Execute the "after action" method
			$class->getMethod('after')->invoke($controller);
		}
		catch (Exception $e)
		{
			// Restore the previous request
			static::$current = $previous;

			if (isset($benchmark))
			{
				// Delete the benchmark, it is invalid
				\Profiler::delete($benchmark);
			}

			if ($e instanceof \ReflectionException)
			{
				// Reflection will throw exceptions for missing classes or actions
				$this->status = 404;
			}
			else
			{
				// All other exceptions are PHP/server errors
				$this->status = 500;
			}

			// Re-throw the exception
			throw $e;
		}

		// Restore the previous request
		static::$current = $previous;

		if (isset($benchmark))
		{
			// Stop the benchmark
			\Profiler::stop($benchmark);
		}

		return $this;
	}
	
	public static function instance( & $uri = TRUE)
	{
		if ( ! static::$instance)
		{
			if (\CMS3::$is_cli)
			{
				// Default protocol for command line is cli://
				static::$protocol = 'cli';

				// Get the command line options
				$options = CLI::options('uri', 'method', 'get', 'post');

				if (isset($options['uri']))
				{
					// Use the specified URI
					$uri = $options['uri'];
				}

				if (isset($options['method']))
				{
					// Use the specified method
					static::$method = strtoupper($options['method']);
				}

				if (isset($options['get']))
				{
					// Overload the global GET data
					parse_str($options['get'], $_GET);
				}

				if (isset($options['post']))
				{
					// Overload the global POST data
					parse_str($options['post'], $_POST);
				}
			}
			else
			{
				if (isset($_SERVER['REQUEST_METHOD']))
				{
					// Use the server request method
					static::$method = $_SERVER['REQUEST_METHOD'];
				}

				if ( ! empty($_SERVER['HTTPS']) AND filter_var($_SERVER['HTTPS'], FILTER_VALIDATE_BOOLEAN))
				{
					// This request is secure
					static::$protocol = 'https';
				}

				if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
				{
					// This request is an AJAX request
					static::$is_ajax = TRUE;
				}

				if (isset($_SERVER['HTTP_REFERER']))
				{
					// There is a referrer for this request
					static::$referrer = $_SERVER['HTTP_REFERER'];
				}

				if (isset($_SERVER['HTTP_USER_AGENT']))
				{
					// Set the client user agent
					static::$user_agent = $_SERVER['HTTP_USER_AGENT'];
				}

				if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
				{
					// Use the forwarded IP address, typically set when the
					// client is using a proxy server.
					static::$client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
				}
				elseif (isset($_SERVER['HTTP_CLIENT_IP']))
				{
					// Use the forwarded IP address, typically set when the
					// client is using a proxy server.
					static::$client_ip = $_SERVER['HTTP_CLIENT_IP'];
				}
				elseif (isset($_SERVER['REMOTE_ADDR']))
				{
					// The remote IP address
					static::$client_ip = $_SERVER['REMOTE_ADDR'];
				}

				if (static::$method !== 'GET' AND static::$method !== 'POST')
				{
					// Methods besides GET and POST do not properly parse the form-encoded
					// query string into the $_POST array, so we overload it manually.
					parse_str(file_get_contents('php://input'), $_POST);
				}

				if ($uri === TRUE)
				{
					$uri = static::detect_uri();
				}
			}

			// Reduce multiple slashes to a single slash
			$uri = preg_replace('#//+#', '/', $uri);

			// Remove all dot-paths from the URI, they are not valid
			$uri = preg_replace('#\.[\s./]*/#', '', $uri);

			// Create the instance singleton
			static::$instance = static::$current = new Request($uri);

			// Add the default Content-Type header
			static::$instance->headers['Content-Type'] = 'text/html; charset=' . \CMS3::$charset;
		}

		return static::$instance;
	}
}