<?php

namespace CMS3\Engine;
 
class Model_Module extends Model {	
		
	public static function initialize(ORM_Meta $meta)
	{
		$meta
			->sorting(array('ordering' => 'ASC'))
			->fields(array(
				'id' 			=> new Field_Primary,
				'name'			=> new Field_String,
				'core' 			=> new Field_Boolean,
				'component' 	=> new Field_Boolean,
				'ordering'		=> new Field_Integer,
			));
   }
}
