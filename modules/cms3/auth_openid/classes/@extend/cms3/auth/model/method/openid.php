<?php

namespace CMS3\Auth;

use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\Model;
  
class Model_Method_OpenID extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->table('auth_method_openid'); // TODO: автоматически
		$meta->fields(array(
				'id'		=> ORM::field('primary'),
				'user'		=> ORM::field('belongsto'),
				'openid'	=> ORM::field('string', array(
					//'unique'	=> TRUE,
					'rules'		=> array(
						'max_length' => array(255),
						'min_length' => array(3) // TODO: в настройки
					)
				)),
			));
	}
}
