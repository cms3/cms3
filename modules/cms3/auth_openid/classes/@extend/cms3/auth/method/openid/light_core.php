<?php defined('SYSPATH') OR die('No direct access allowed.');
 
class Auth_Method_OpenID_Core extends Auth_Method {

	public static function auth(Array $params)
	{
		static::_include_libs();

		$auth_request = new LightOpenID;
        $auth_request->identity = $params['openid_identifier'];
        $auth_request->required = array('namePerson');
        $auth_request->optional = array('namePerson/friendly', 'contact/email');
        
        $return_to = Route::get('action')->uri(array(
			'call_controller'	=> 'auth_openid',
			'call_action'		=> 'finish_auth'
		));
		$auth_request->returnUrl = URL::site($return_to, TRUE);
		
		App::instance()->redirect($auth_request->authUrl());
	}
	
	public static function finish()
	{
		self::_include_libs();
		
		$message = '';
		
		$response = new LightOpenID;
		
		if (Request::instance()->param('openid_mode') == 'cancel')
		{
			$message = 'Verification cancelled.';
		}
		elseif ($response->validate())
		{
			$user_data = $response->getAttributes();
		
			$openid = $response->identity;
			$method_data = Jelly::select('auth_method_openid')->by_openid($openid)->execute();
			
			if ($method_data->loaded() && $method_data->user->loaded())
			{
				Auth::instance()->do_login($method_data->user); // TODO: allow remember?
			}
			else
			{
				$user_data = $response->getAttributes();
				
				if (isset($user_data['namePerson'])) // TODO
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
					$param_value->value = $user_data['namePerson'];
					$param_value->save();
					
					Auth::instance()->do_login($user); // TODO: allow remember?
				}
				else
				{
					$message = 'Can\'t fetch user details from OpenID provider.';
				}
			}
		}
		else
		{
			$message = "OpenID authentication failed: ";
		}
		
		App::instance()->redirect('/', $message); // TODO return to url
	}
	
	protected static function _include_libs()
	{
		if (! class_exists('LightOpenID', FALSE))
		{
			require Kohana::find_file('vendor', 'lightopenid/openid');
		}
	}
}
