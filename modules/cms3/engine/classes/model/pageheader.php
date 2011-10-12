<?php

namespace CMS3\Engine;
 
class Model_PageHeader extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id' 			=> ORM::field('primary'),
			'condition'		=> ORM::field('belongsto'),
			'tag'			=> ORM::field('string'),
			'attribute'		=> ORM::field('string'),
			'value'			=> ORM::field('string_multilang'),
		));
   }
}
