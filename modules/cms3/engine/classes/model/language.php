<?php

namespace CMS3\Engine;

class Model_Language extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'code'			=> ORM::field('primary'),
				'short_code'	=> ORM::field('string'),
				'title'			=> ORM::field('string'),
				'active'		=> ORM::field('boolean'),
			));
   }
}
