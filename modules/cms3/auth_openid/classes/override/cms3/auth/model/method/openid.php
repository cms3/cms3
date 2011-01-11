<?php

namespace CMS3\Auth;

use CMS3\Engine;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\Model;
  
class Model_Method_OpenID extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta
			->table('auth_method_openid') // TODO: автоматически
			->fields(array(
				'id'		=> new Engine\Field_Primary,
				'user'		=> new Engine\Field_BelongsTo,
				'openid'	=> new Engine\Field_String(array(
					//'unique'	=> TRUE,
					'rules'		=> array(
						'max_length' => array(255),
						'min_length' => array(3) // TODO: в настройки
					)
				)),
			));
	}
}