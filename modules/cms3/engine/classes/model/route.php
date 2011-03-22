<?php

namespace CMS3\Engine;
 
class Model_Route extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id' 		=> new Field_Primary,
				'format'	=> new Field_String,
				'title'		=> new Field_String_Multilang,
			));
   }
}