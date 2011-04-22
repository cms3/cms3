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
				'id' 			=> new Engine\Field_Primary,
				'parent'		=> new Engine\Field_BelongsTo(array('model' => 'cms3\acl\group')),
				'name' 			=> new Engine\Field_String_Multilang,
				'ordering'		=> new Engine\Field_Integer,
				'users'			=> new Engine\Field_HasMany,
			));
   }
   
	public function get_role_id()
	{
		return 'group_' . $this->id;
	}
}
