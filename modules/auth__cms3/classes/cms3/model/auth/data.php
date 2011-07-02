<?php defined('SYSPATH') OR die('No direct access allowed.');
 
class CMS3_Model_Auth_Data extends Auth_Model {
	
	public static function initialize(Jelly_Meta $meta)
	{
		$meta->fields(array(
				'user'		=> new Field_BelongsTo,
				'method'	=> new Field_BelongsTo,
				'data'		=> new Field_Text,
			));
   }
}