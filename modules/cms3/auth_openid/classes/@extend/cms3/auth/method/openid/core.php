<?php

namespace CMS3\Auth;

use CMS3\Engine\Route;
use CMS3\Engine\URL;
use CMS3\Engine\Model;
use CMS3\Engine\ORM;
 
class Method_OpenID_Core extends Method {

	public static function auth(Array $params)
	{
		$openid = $params['openid_identifier'];
	
		$return_to = Route::get('action')->uri(array(
			'call_controller'	=> 'auth_openid',
			'call_action'		=> 'finish_auth'
		));
		$return_to = URL::site($return_to, TRUE);
		
		$openid_auth = new \Openid_Auth(array('return_to' => $return_to, 'realm' => URL::site('/', TRUE)));
		
		if ($openid_auth->start_authentication($openid, TRUE))
		{
			$openid_auth->redirect_to_openid_provider();
		}
		else
		{
			throw new Auth_Exception("Authentication error: Not a valid OpenID: openid.", array('openid' => $openid));
		}
	}
	
	public static function finish()
	{
		$openid_auth = \Openid_Auth::instance();
		$openid_auth->load_from_session();
		
		$message = '';
		$success = FALSE;
		
		if ($openid_auth->complete_authentication())
		{
			$openid = $openid_auth->identity;
			$method_data = Model::factory('cms3\auth\method_openid_params')->query()->by_openid($openid)->select();
			
			if ($method_data->loaded() && $method_data->user->loaded())
			{
				Auth::instance()->do_login($method_data->user); // TODO: allow remember?
			}
			else
			{
				if ($method_data->loaded())
				{
					$method_data->delete();
				}
				
				$user_data = $openid_auth->user_attributes;
				
				if (isset($user_data['fullname'])) // TODO
				{
					$user = Model::factory('user');
					$user->enabled = 1;
					$user->save();
					
					$method_data = Model::factory('cms3\auth\method_openid_params');
					$method_data->user = $user;
					$method_data->openid = $openid;
					$method_data->save();
					
					// TODO: $user->param('first_name', $user_data['fullname'])
					
					$param = ORM::query('user_param')
						->where('name', '=', 'first_name')
						->limit(1)
						->execute();
					
					$param_value = Model::factory('cms3\auth\user_param_value');
					$param_value->user = $user;
					$param_value->info = $param;
					$param_value->value = $user_data['fullname'];
					$param_value->save();
					
					\Auth::instance()->do_login($user); // TODO: allow remember?
					$success = TRUE;
				}
				else
				{
					$message = 'Can\'t fetch user details from OpenID provider.';
				}
			}
		}
		else
		{
			$message = "OpenID authentication failed";
		}
		
		\Auth::instance()->result($success, 'redirect', array('message' => $message));
	}
}
