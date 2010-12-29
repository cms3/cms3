<?php

namespace CMS3\Auth;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;

class Model_User extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id'		=> new Engine\Field_Primary,
				'tmp'		=> new Engine\Field_Integer,
				'params'	=> new Engine\Field_HasMany(array(
					'foreign' 	=> 'cms3\auth\user_param_value.user_id',
					'model'		=> 'cms3\auth\user_param_value',
				)),
			));
	}
	
	public function get_params_array()
	{
		$result = array();
		foreach ($this->params as $param)
		{
			$result[$param->info->name] = $param->value;
		}
		return $result;
	}
}