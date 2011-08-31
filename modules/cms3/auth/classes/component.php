<?php

namespace CMS3\Auth;

use CMS3\Engine\Exception;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\App;
use CMS3\Engine\Format;

class Component extends Engine\Component {

	public function current_user()
	{
		$user_id = \Session::instance()->get('current_user');
		
		if (! $user_id)
		{
			$this->auto_login();
			$user_id = \Session::instance()->get('current_user');
		}
		
		if ($user_id)
		{
			$user = ORM::query('cms3\auth\user', $user_id)->select();

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
		if (! $user->enabled)
		{
			throw new Exception('User is disabled');
			return FALSE;
		}
		
		//\Session::instance()->regenerate();
		\Session::instance()->set('current_user', $user->id);
		
		if ($remember)
		{
			$token = Model_Token::factory();
			$token->create($user->id, $this->_config['lifetime']);
			\Cookie::set('auth_user_token', $token->token, $this->_config['lifetime']);
		}
	}
	
	public function logout($logout_all = FALSE)
	{
		if ($token = \Cookie::get('auth_user_token'))
		{
			$token = Model_Token::factory()->query()
				->where('token', '=', $token)
				->limit(1)
				->select();
			
			if ($token->loaded())
			{
				if ($logout_all)
				{
					ORM::delete('cms3\auth\token')->where('user_id', '=' ,$token->user->id)->execute();
				}
				else
				{
					$token->delete();
				}
			}
			\Cookie::delete('auth_user_token');
		}
		
		\Session::instance()->delete('current_user');
		\Session::instance()->regenerate();
	}
	
	public function auto_login()
	{
		if ($token = \Cookie::get('auth_user_token'))
		{
			$token = Model_Token::factory()->query()
				->where('token', '=', $token)
				->limit(1)
				->select();
			
			if ($token->loaded() && $token->user->loaded() && $token->user->enabled)
			{
				//$token->update();
				//Cookie::set('auth_user_token', $token->token, $token->expires - time());
				$this->do_login($token->user);

				return TRUE;
			}
		}

		return FALSE;
	}
	
	public function result($success, $format = 'redirect', array $params = array())
	{
		if ($format == NULL || $format == 'redirect')
		{
			App::instance()->redirect(@$params['return'], @$params['message']);
		}

		$result = array('success' => $success);
		if (isset($params['return']))
		{
			$result['return'] = $params['return'];
		}
		if (! $success)
		{
			$result['errors']['text'] = @$params['message'];
		}
		
		// TODO: return only
		echo Format::factory($format)->convert($result);
	}

}