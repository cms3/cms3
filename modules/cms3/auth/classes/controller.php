<?php

namespace CMS3\Auth;

use CMS3\Engine\Controller_Component;
use CMS3\Engine\NS;
use CMS3\Engine\Request;

class Controller extends Controller_Component {

	public function action_login($params = array())
	{
		$method = isset($params['method']) ? $params['method'] : 'basic';
		
		$method_class = NS::add_namespace('Method_' . ucfirst($method), 'CMS3\Auth');
		
		if (! class_exists($method_class))
		{
			throw new Auth_Exception('Can not find :method auth provider', array(':method' => $method)); 
		}
		
		$params['return'] = isset($params['return']) ? base64_decode($params['return']) : '';
		
		$method_class::auth($params);
		// Call only if auth provider don't redirect anywhere
		//Request::current()->redirect($params['return']);
	}
	
	public function action_logout($params = array())
	{
		Auth::instance()->logout();
		
		$return = isset($params['return']) ? base64_decode($params['return']) : '';
		Request::current()->redirect($return);
	}
	
	public function action_display_login_form($params = array())
	{
		$return = base64_encode(Request::current()->uri());
		$user = Auth::instance()->current_user();
		if (is_object($user))
		{
			$user_data = $user->as_array();
			$user_data['params'] = $user->get_params_array();

			echo $this->component->get_view("form/logout", array(
				'user'		=> $user_data,
				'return'	=> $return,
			));
		}
		else
		{
			echo $this->component->get_view("form/login", array(
				'return'	=> $return,
			));
		}
	}
	
	public function action_display_register_form($params = array())
	{
	}
}