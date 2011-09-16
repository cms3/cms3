<?php

namespace CMS3\Engine;
 
class Model_Module extends Model {	
		
	public static function initialize(ORM_Meta $meta)
	{
		$meta->sorting(array('ordering' => 'ASC'));
		$meta->fields(array(
			'id' 			=> ORM::field('primary'),
			'name'			=> ORM::field('string'),
			'module'		=> ORM::field('string'),
			'title'			=> ORM::field('string_multilang'),
			'core' 			=> ORM::field('boolean'),
			'ordering'		=> ORM::field('integer')
		));
   }
}
