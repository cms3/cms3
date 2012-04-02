<?php

namespace CMS3\Auth;

use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\ORM;
use CMS3\Acl;

class Model_User extends Model implements \Acl_Role_Interface {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'		=> ORM::field('primary'),
			'enabled'	=> ORM::field('boolean'),
			'name'		=> ORM::field('string', array(
				'column' => 'display_name',
				'show_in_list' => true
			))
			//'properties' => ORM::field('properties')
		));
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