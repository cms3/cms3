<?php

namespace CMS3\Engine;
 
class Model_PageHeader extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id' 			=> new Field_Primary,
				'condition'		=> new Field_BelongsTo,
				'tag'			=> new Field_String,
				'attribute'		=> new Field_String,
				'value'			=> new Field_String_Multilingual,
			));
   }
}
