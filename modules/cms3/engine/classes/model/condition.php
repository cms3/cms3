<?php

namespace CMS3\Engine;
 
class Model_Condition extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id' 			=> ORM::field('primary'),
			'condition'		=> ORM::field('string'),
			'title'			=> ORM::field('string_multilang'),
		));
   }
}
