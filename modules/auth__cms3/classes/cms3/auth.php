<?php defined('SYSPATH') or die('No direct script access.');

class CMS3_Auth extends CMS3_Component {

	public function current_user()
	{
		$user_id = Session::instance()->get('current_user');
		
		if (! $user_id)
		{
			$this->auto_login();
			$user_id = Session::instance()->get('current_user');
		}
		
		if ($user_id)
		{
			$user = Jelly::select('user')->load($user_id);

			if ($user->loaded())
			{
				return $user;
			}
		}
		return NULL;
	}
	
	public function logged_in()
	{
		return ($this->current_user() != NULL);
	}
	
	public function do_login($user, $remember = FALSE)
	{
		//Session::instance()->regenerate();
		Session::instance()->set('current_user', $user->id);
		
		if ($remember)
		{
			$token = Model::factory('auth_token');
			$token->create($user->id, $this->_config['lifetime']);
			Cookie::set('auth_user_token', $token->token, $this->_config['lifetime']);
		}
	}
	
	public function logout($logout_all = FALSE)
	{
		if ($token = Cookie::get('auth_user_token'))
		{
			$token = Jelly::select('auth_token')->where('token', '=', $token)->limit(1)->execute();
			
			if ($token->loaded())
			{
				if ($logout_all)
				{
					Jelly::delete('auth_token')->where('user_id', '=' ,$token->user->id)->execute();
				}
				else
				{
					$token->delete();
				}
			}
			Cookie::delete('auth_user_token');
		}
		
		Session::instance()->delete('current_user');
		Session::instance()->regenerate();
	}
	
	public function auto_login()
	{
		if ($token = Cookie::get('auth_user_token'))
		{
			$token = Jelly::select('auth_token')->where('token', '=', $token)->limit(1)->execute();
			
			if ($token->loaded() && $token->user->loaded())
			{
				//$token->update();
				//Cookie::set('auth_user_token', $token->token, $token->expires - time());
				$this->do_login($token->user);

				return TRUE;
			}
		}

		return FALSE;
	}
}