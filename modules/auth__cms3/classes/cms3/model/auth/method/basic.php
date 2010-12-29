<?php defined('SYSPATH') OR die('No direct access allowed.');
 
class CMS3_Model_Auth_Method_Basic extends Auth_Model {
	
	public static function initialize(Jelly_Meta $meta)
	{
		$meta
			->table('auth_method_basic') // TODO: автоматически
			->fields(array(
				'id'			=> new Field_Primary,
				'user'		=> new Field_BelongsTo,
				'username'		=> new Field_String(array(
					'unique'	=> TRUE,
					'rules'		=> array(
						'max_length' => array(50),
						'min_length' => array(6) // TODO: в настройки
					)
				)),
				'password' => new Field_Password(array(
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