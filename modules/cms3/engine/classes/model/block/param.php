<?php

namespace CMS3\Engine;
 
class Model_Block_Param extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id' 	=> ORM::field('primary'),
			'block'	=> ORM::field('belongsto'),
			'name'	=> ORM::field('string'),
			'value'	=> ORM::field('string'),
		));
   }
}
