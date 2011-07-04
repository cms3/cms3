<?php defined('SYSPATH') OR die('No direct access allowed.');
 
class Auth_Method_OpenID_Core extends Auth_Method {

	public static function auth(Array $params)
	{
		static::_include_libs();
		
		$openid = $params['openid_identifier'];

		$consumer = static::_get_consumer();
		$auth_request = $consumer->begin($openid);
		
		if (! is_object($auth_request)) {
			throw new Auth_Exception("Authentication error: Not a valid OpenID: openid.", array('openid' => $openid));
		}
    
		$sreg_request = Auth_OpenID_SRegRequest::build(array(), array('nickname', 'fullname', 'email'));
		$auth_request->addExtension($sreg_request);
		
		$trust_url = URL::base(FALSE, TRUE);
		$finish_url = Route::get('action')->uri(array(
			'call_controller'	=> 'auth_openid',
			'call_action'		=> 'finish_auth'
		));
		$finish_url = URL::site($finish_url, TRUE);
				 
		if ($auth_request->shouldSendRedirect())
		{
			$redirect_url = $auth_request->redirectURL($trust_url, $finish_url);
			
			if (Auth_OpenID::isFailure($redirect_url))
			{
				throw new Auth_Exception("Could not redirect to server: " . $redirect_url->message);
			}
			else
			{
				Request::instance()->redirect($redirect_url);
			}
		}
		else
		{
			$form_id = 'openid_message';
			$form_html = $auth_request->htmlMarkup($trust_url, $finish_url, false, array('id' => $form_id));

			if (Auth_OpenID::isFailure($form_html))
			{
				throw new Auth_Exception("Could not redirect to server: " . $form_html->message);
			}
			else
			{
				echo $form_html;
			}
		}
	}
	
	public static function finish()
	{
		self::_include_libs();

		$consumer = static::_get_consumer();
		
		$return_to = Route::get('action')->uri(array(
			'call_controller'	=> 'auth_openid',
			'call_action'		=> 'finish_auth'
		));
		$return_to = URL::site($return_to, TRUE);
		$response = $consumer->complete($return_to);
		
		$message = '';
		if ($response->status == Auth_OpenID_SUCCESS)
		{
			$openid = $response->getDisplayIdentifier();
			$method_data = Jelly::select('auth_method_openid')->by_openid($openid)->execute();
			
			if ($method_data->loaded() && $method_data->user->loaded())
			{
				Auth::instance()->do_login($method_data->user); // TODO: allow remember?
			}
			else
			{
				$sreg_resp = Auth_OpenID_SRegResponse::fromSuccessResponse($response);
				$user_data = $sreg_resp->contents();
				
				if (isset($user_data['fullname'])) // TODO
				{
					$user = Model::factory('user');
					$user->tmp = 0; // TODO
					$user->save();
					
					$method_data = Model::factory('auth_method_openid');
					$method_data->user = $user;
					$method_data->openid = $openid;
					$method_data->save();
					
					// TODO: $user->param('first_name', $user_data['fullname'])
					
					$param = Jelly::select('user_param')
						->where('name', '=', 'first_name')
						->limit(1)
						->execute();
					
					$param_value = Model::factory('user_param_value');
					$param_value->user = $user;
					$param_value->info = $param;
					$param_value->value = $user_data['fullname'];
					$param_value->save();
					
					Auth::instance()->do_login($user); // TODO: allow remember?
				}
				else
				{
					$message = 'Can\'t fetch user details from OpenID provider.';
				}
			}
		}
		elseif ($response->status == Auth_OpenID_CANCEL)
		{
			$message = 'Verification cancelled.';
		}
		else//if ($response->status == Auth_OpenID_FAILURE)
		{
			$message = "OpenID authentication failed: " . $response->message;
			//print_r($response);
			//exit;
		}
		
		App::instance()->redirect('/', $message); // TODO return to url
	}
	
	protected static function _get_consumer()
	{
		$store = new Auth_OpenID_FileStore('tmp/openid'); // TODO: move to config
		$consumer = new Auth_OpenID_Consumer($store);
		
		return $consumer;
	}
	
	protected static function _include_libs()
	{
		if (! class_exists('Auth_OpenID', FALSE))
		{
			define('Auth_OpenID_RAND_SOURCE', DOCROOT . 'tmp/openid/random');
			global $_SESSION;
			$_SESSION = array();
			chdir(MODPATH . 'auth_openid/vendor/openid'); // TODO
			require Kohana::find_file('vendor', 'openid/Auth/OpenID/Consumer');
			require Kohana::find_file('vendor', 'openid/Auth/OpenID/FileStore');
			require Kohana::find_file('vendor', 'openid/Auth/OpenID/SReg');
			require Kohana::find_file('vendor', 'openid/Auth/OpenID/PAPE');
			chdir(DOCROOT); // TODO
		}
	}
}
