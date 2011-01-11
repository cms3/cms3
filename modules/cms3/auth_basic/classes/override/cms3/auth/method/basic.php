<?php

namespace CMS3\Auth;

use CMS3\Engine\ORM;
use CMS3\Engine\App;

class Method_Basic extends Auth_Method {

	public static function auth(Array $params)
	{
		$message = '';
		if (empty($params['username']) || empty($params['password']))
		{	
			$message = 'Empty login or password';
		}
		else
		{
			$obj = ORM::select('cms3\auth\auth_method_basic')->by_username($params['username'])->execute();
			
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