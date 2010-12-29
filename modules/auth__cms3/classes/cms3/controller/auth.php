<?php defined('SYSPATH') or die('No direct script access.');

class CMS3_Controller_Auth extends CMS3_Controller_Component {

	public function action_login($params = array())
	{
		$method = isset($params['method']) ? $params['method'] : 'basic';
	
		$method_class = 'Auth_Method_' . ucfirst($method);
		
		if (! class_exists($method_class))
		{
			throw new Auth_Exception('Can not find :method auth provider', array(':method' => $method)); 
		}
		
		$params['return'] = isset($params['return']) ? base64_decode($params['return']) : '';
		
		$method_class::auth($params);
		// Call only if auth provider don't redirect anywhere
		//Request::instance()->redirect($params['return']);
	}
	
	public function action_logout($params = array())
	{
		Auth::instance()->logout();
		
		$return = isset($params['return']) ? base64_decode($params['return']) : '';
		Request::instance()->redirect($return);
	}
	
	public function action_display_login_form($params = array())
	{
		$return = base64_encode(Request::instance()->uri);
		$user = Auth::instance()->current_user();
		if (is_object($user))
		{
			$user_data = $user->as_array();
			$user_data['params'] = $user->get_params_array();
			
			echo $this->component->get_view("user_small_info", array(
				'user'		=> $user_data,
				'return'	=> $return,
			));
		}
		else
		{
			echo $this->component->get_view("form", array(
				'return'	=> $return,
			));
		}
	}
	
	public function action_display_register_form($params = array())
	{
	}
}