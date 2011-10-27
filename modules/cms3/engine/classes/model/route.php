<?php

namespace CMS3\Engine;
 
class Model_Route extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id' 		=> ORM::field('primary'),
			'format'	=> ORM::field('string'),
			'title'		=> ORM::field('string', array(
				'multilang' => TRUE
			))
		));
   }
}