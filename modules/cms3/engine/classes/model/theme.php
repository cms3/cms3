<?php

namespace CMS3\Engine;

use CMS3\Engine\Model;

class Model_Theme extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id' 		=> ORM::field('primary'),
			'name' 		=> ORM::field('string'),
			'condition'	=> ORM::field('belongsto')
		));
   }
}
