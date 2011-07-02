<?php defined('SYSPATH') OR die('No direct access allowed.');
 
class CMS3_Auth_Method_Basic extends Auth_Method {

	public static function auth(Array $params)
	{
		$message = '';
		if (empty($params['username']) || empty($params['password']))
		{	
			$message = 'Empty login or password';
		}
		else
		{
			$obj = Jelly::select('auth_method_basic')->by_username($params['username'])->execute();
			
			if ($obj->loaded() && $obj->user->loaded() && $obj->check_password($params['password']))
			{
				Auth::instance()->do_login($obj->user, $params['remember']);
			}
			else
			{
				$message = 'Invalid login/password pair';
			}
		}
		App::instance()->redirect($params['return'], $message);
	}
}