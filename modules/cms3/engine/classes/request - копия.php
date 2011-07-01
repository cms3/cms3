<?php

namespace CMS3\Engine;

class Request extends \Request {

	public function set_param($key, $value)
	{
		$this->_params[$key] = $value;
	}
	
	public function unset_param($key)
	{
		if (isset($this->_params[$key]))
		{
			unset($this->_params[$key]);
		}
	}
	
	public function set_params(array $params)
	{
		$this->_params = $params;
	}
	
	public function __construct($uri, Cache $cache = NULL, $injected_routes = array())
	{
		// Initialise the header
		$this->_header = new \HTTP_Header(array());

		// Assign injected routes
		$this->_injected_routes = $injected_routes;

		// Detect protocol (if present)
		/**
		 * @todo   make this smarter, search for localhost etc
		 */
		if (strpos($uri, '://') === FALSE)
		{
			// Remove trailing slashes from the URI
			$uri = trim($uri, '/');

			$processed_uri = static::process_uri($uri, $this->_injected_routes);

			if ($processed_uri === NULL)
			{
				throw new HTTP_Exception_404('Unable to find a route to match the URI: :uri', array(
					':uri' => $uri,
				));
			}

			// Store the URI
			$this->_uri = $uri;

			// Store the matching route
			$this->_route = $processed_uri['route'];
			$params = $processed_uri['params'];

			// Is this route external?
			$this->_external = $this->_route->is_external();

			if (isset($params['directory']))
			{
				// Controllers are in a sub-directory
				$this->_directory = $params['directory'];
			}

			// Store the controller
			$this->_controller = $params['controller'];

			if (isset($params['action']))
			{
				// Store the action
				$this->_action = $params['action'];
			}
			else
			{
				// Use the default action
				$this->_action = Route::$default_action;
			}

			// These are accessible as public vars and can be overloaded
			unset($params['controller'], $params['action'], $params['directory']);

			// Params cannot be changed once matched
			$this->_params = $params;

			// Apply the client
			$this->_client = new Request_Client(array('cache' => $cache));
		}
		else
		{
			// Create a route
			$this->_route = new Route($uri);

			// Store the URI
			$this->_uri = $uri;

			// Set external state
			$this->_external = TRUE;

			// Setup the client
			$this->_client = new \Request_Client_External(array('cache' => $cache));
		}
	}
	
	public static function factory($uri = TRUE, Cache $cache = NULL, $injected_routes = array())
	{
		// If this is the initial request
		if ( ! static::$initial)
		{
			if (\Kohana::$is_cli)
			{
				// Default protocol for command line is cli://
				$protocol = 'cli';

				// Get the command line options
				$options = CLI::options('uri', 'method', 'get', 'post', 'referrer');

				if (isset($options['uri']))
				{
					// Use the specified URI
					$uri = $options['uri'];
				}

				if (isset($options['method']))
				{
					// Use the specified method
					$method = strtoupper($options['method']);
				}
				else
				{
					// Default to GET requests
					$method = HTTP_Request::GET;
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

				if (isset($options['referrer']))
				{
					$referrer = $options['referrer'];
				}
			}
			else
			{
				if (isset($_SERVER['REQUEST_METHOD']))
				{
					// Use the server request method
					$method = $_SERVER['REQUEST_METHOD'];
				}
				else
				{
					// Default to GET requests
					$method = HTTP_Request::GET;
				}

				if ( ! empty($_SERVER['HTTPS']) AND filter_var($_SERVER['HTTPS'], FILTER_VALIDATE_BOOLEAN))
				{
					// This request is secure
					$protocol = 'https';
				}
				else
				{
					$protocol = 'http';
				}

				if (isset($_SERVER['HTTP_REFERER']))
				{
					// There is a referrer for this request
					$referrer = $_SERVER['HTTP_REFERER'];
				}

				if (isset($_SERVER['HTTP_USER_AGENT']))
				{
					// Browser type
					static::$user_agent = $_SERVER['HTTP_USER_AGENT'];
				}

				if (isset($_SERVER['HTTP_X_REQUESTED_WITH']))
				{
					// Typically used to denote AJAX requests
					$requested_with = $_SERVER['HTTP_X_REQUESTED_WITH'];
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

				if ($method !== 'GET')
				{
					// Ensure the raw body is saved for future use
					$body = file_get_contents('php://input');
				}

				if ($uri === TRUE)
				{
					// Attempt to guess the proper URI
					$uri = static::detect_uri();
				}
			}

			// Create the instance singleton
			static::$initial = $request = new static($uri, $cache);

			// Store global GET and POST data in the initial request only
			$request->query($_GET);
			$request->post($_POST);

			if (isset($protocol))
			{
				// Set the request protocol
				$request->protocol($protocol);
			}

			if (isset($method))
			{
				// Set the request method
				$request->method($method);
			}

			if (isset($referrer))
			{
				// Set the referrer
				$request->referrer($referrer);
			}

			if (isset($requested_with))
			{
				// Apply the requested with variable
				$request->requested_with($requested_with);
			}

			if (isset($body))
			{
				// Set the request body (probably a PUT type)
				$request->body($body);
			}
		}
		else
		{
			$request = new static($uri, $cache, $injected_routes);
		}

		return $request;
	}
}