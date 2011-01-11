<?php

namespace CMS3\Auth;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\ORM;
use CMS3\Acl;

class Model_User extends Model implements \Acl_Role_Interface {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id'		=> new Engine\Field_Primary,
				'enabled'	=> new Engine\Field_Boolean,
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
	
	public function get_role_id()
	{
		return 'user_' . $this->id;
	}
	
	public function check_privilege($resource, $privilege)
	{
		return Acl\Component::instance()->check($this, $resource, $privilege);
	}
}