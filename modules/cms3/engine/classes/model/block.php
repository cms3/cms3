<?php

namespace CMS3\Engine;
 
class Model_Block extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->sorting(array('ordering' => 'ASC'));
		$meta->fields(array(
			'id' 		=> ORM::field('primary'),
			'position'	=> ORM::field('string'),
			'module'	=> ORM::field('string'),
			'action' 	=> ORM::field('string'),
			'condition'	=> ORM::field('belongsto'),
			'ordering'	=> ORM::field('integer'),
			'template'	=> ORM::field('string'),
			'params'	=> ORM::field('params'),
			'content'	=> ORM::field('text'),
		));
	}
}
