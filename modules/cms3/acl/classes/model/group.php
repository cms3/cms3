<?php

namespace CMS3\Acl;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;

class Model_Group extends Model_Editable implements \Acl_Role_Interface {

	public static function initialize(ORM_Meta $meta)
	{
		$meta
			->sorting(array('ordering' => 'ASC'))
			->fields(array(
				'id' 			=> ORM::field('primary'),
				'parent'		=> ORM::field('belongsto',
					array('model' => 'cms3\acl\group')
				),
				'name' 			=> ORM::field('string_multilang'),
				'ordering'		=> ORM::field('integer'),
				'users'			=> ORM::field('hasmany'),
			));
   }
   
	public function get_role_id()
	{
		return 'group_' . $this->id;
	}
}
