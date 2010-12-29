<?php

namespace CMS3\Acl;

use CMS3\Engine;
 
class Model_Acl_Role extends Acl_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		$meta
			->sorting(array('ordering' => 'ASC'))
			->fields(array(
				'id' 			=> new Field_Primary,
				'parent'		=> new Field_BelongsTo(array('model' => 'acl_role')),
				'name' 			=> new Field_String_Multilingual,
				'ordering'		=> new Field_Integer,
				'users'			=> new Field_HasMany,
			));
   }
}
