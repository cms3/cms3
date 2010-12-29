<?php

namespace CMS3\Engine;
 
class Model_Block_Param extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id' 	=> new Field_Primary,
				'block'	=> new Field_BelongsTo,
				'name'	=> new Field_String,
				'value'	=> new Field_String,
			));
   }
}