<?php

namespace CMS3\Auth;

use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;

class Model_Method_Basic extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->table('auth_method_basic'); // TODO: автоматически
		$meta->fields(array(
			'id'		=> ORM::field('primary'),
			'user'		=> ORM::field('belongsto'),
			'username'	=> ORM::field('string', array(
				// TODO: uncomment this
				//'unique'	=> TRUE, 
				'rules'		=> array(
					'max_length' => array(50),
					'min_length' => array(6) // TODO: в настройки
				)
			)),
			'password' => ORM::field('password', array(
				//'hash_with' => array('Model_Auth_Method_Basic', 'hash_password'),
				'rules' => array(
					'max_length' => array(1024),
					'min_length' => array(6) // TODO: в настройки
				)
			)),
		));
	}
  
   // TODO: вынести это отсюда или объеденить с основным классом
   
	public static function hash_password($password) // TODO: добавлять соль
	{
		return md5($password); // TODO: метод хеширования -- в конфиг
	}
	
	public function check_password($password)
	{
		$password_hash = static::hash_password($password);
		
		return ($password_hash == $this->password);
	}
}