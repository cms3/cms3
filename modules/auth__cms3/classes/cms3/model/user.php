<?php defined('SYSPATH') OR die('No direct access allowed.');
 
class CMS3_Model_User extends Auth_Model {
	
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->fields(array(
				'id'			=> new Field_Primary,
				'tmp'			=> new Field_Integer,
				'params'	=> new Field_HasMany(array(
					'foreign' => 'user_param_value.user_id',
					'model'		=> 'user_param_value',
				)),
			));
	}
	
	public function get_params_array()
	{
		$result = array();
		foreach ($this->params as $param)
		{
			$result[$param->info['name']] = $param->value;
		}
		return $result;
	}
}