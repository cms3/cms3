<?php

namespace CMS3\Engine;
 
class Model_Block extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->sorting(array('ordering' => 'ASC'));
		
		$meta->fields(array(
			'id' 		=> ORM::field('primary'),
			'position'	=> ORM::field('string'),
			'component'	=> ORM::field('string'),
			'action' 	=> ORM::field('string'),
			'condition'	=> ORM::field('belongsto'),
			'ordering'	=> ORM::field('integer'),
			'params'	=> ORM::field('params'),
		));
	}
}
