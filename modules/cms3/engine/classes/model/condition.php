<?php

namespace CMS3\Engine;
 
class Model_Condition extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id' 			=> new Field_Primary,
				'condition'		=> new Field_String,
				'title'			=> new Field_String_Multilingual,
			));
   }
}
