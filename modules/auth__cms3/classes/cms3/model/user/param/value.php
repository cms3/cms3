<?php defined('SYSPATH') OR die('No direct access allowed.');
 
class CMS3_Model_User_Param_Value extends Auth_Model {
	
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->fields(array(
				'id' 		=> new Field_Primary,
				'user'	=> new Field_BelongsTo,
				'value'	=> new Field_String,
				'info'	=> new Field_BelongsTo(array(
					'column'	=> 'param_id',
					'model'		=> 'auth_user_param',
					'foreign'	=> 'auth_user_params.id'
				)),
			));
   }
}
