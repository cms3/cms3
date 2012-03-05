<?php

namespace CMS3\Auth;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
 
class Model_User_Param extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id' 		=> ORM::field('primary'),
			'name'		=> ORM::field('string'),
			'label'		=> ORM::field('string', array(
				'multilang' => TRUE
			)),
		));
   }
}
