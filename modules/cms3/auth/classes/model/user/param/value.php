<?php

namespace CMS3\Auth;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
 
class Model_User_Param_Value extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id' 	=> ORM::field('primary'),
			'user'	=> ORM::field('belongsto'),
			'value'	=> ORM::field('string'),
			'info'	=> ORM::field('belongsto', array(
				'column'	=> 'param_id',
				'model'		=> 'cms3\auth\user_param',
				'foreign'	=> 'cms3\auth\user_param.id'
			)),
		));
   }
}
