<?php

namespace CMS3\Engine;

class Model_Config extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id' 			=> ORM::field('primary'),
			'module'		=> ORM::field('string'),
			'_data'			=> ORM::field('serialized),
		));
   }
}
