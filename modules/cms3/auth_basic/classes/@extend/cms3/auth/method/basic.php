<?php

namespace CMS3\Auth;

use CMS3\Engine\ORM;
use CMS3\Engine\App;

class Method_Basic extends Auth_Method {

	public static function auth(Array $params)
	{
		$message = '';
		$success = FALSE;
		if (empty($params['username']) || empty($params['password']))
		{	
			$message = 'Empty login or password';
		}
		else
		{
			$obj = Model_Method_Basic::factory()->query()->by_username($params['username'])->select();
			
			if ($obj->loaded() && $obj->user->loaded() && $obj->check_password($params['password']))
			{
				\Auth::instance()->do_login($obj->user, @$params['remember']);
				$success = TRUE;
			}
			else
			{
				$message = 'Invalid login/password pair';
			}
		}
		\Auth::instance()->result($success, @$params['format'], array('message' => $message, 'return' => @$params['return']));
	}
}