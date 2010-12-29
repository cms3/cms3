<?php defined('SYSPATH') OR die('No direct access allowed.');
 
class CMS3_Model_User_Param extends Auth_Model {
	
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->fields(array(
				'id' 			=> new Field_Primary,
				'name'		=> new Field_String,
				'label'		=> new Field_String_Multilingual,
			));
   }
}