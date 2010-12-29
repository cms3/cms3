<?php

namespace CMS3\Engine;

class Model_Language extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'code'			=> new Field_Primary,
				'short_code'	=> new Field_String,
				'title'			=> new Field_String,
				'active'		=> new Field_Boolean,
			));
   }
}
