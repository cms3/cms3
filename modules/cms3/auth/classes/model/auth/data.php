<?php

namespace CMS3\Auth;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
 
class Model_Auth_Data extends Model {	
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'user'		=> ORM::field('belongsto'),
			'method'	=> ORM::field('belongsto'),
			'data'		=> ORM::field('string'),
		));
   }
}