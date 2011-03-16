<?php

namespace CMS3\Auth;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
 
class Model_User_Param_Value extends Model {
	
	public static function initialize(Engine\ORM_Meta $meta)
	{
		$meta->fields(array(
				'id' 	=> new Engine\Field_Primary,
				'user'	=> new Engine\Field_BelongsTo,
				'value'	=> new Engine\Field_String,
				'info'	=> new Engine\Field_BelongsTo(array(
					'column'	=> 'param_id',
					'model'		=> 'cms3\auth\user_param',
					'foreign'	=> 'cms3\auth\user_param.id'
				)),
			));
   }
}





