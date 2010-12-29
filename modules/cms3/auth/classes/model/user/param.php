<?php

namespace CMS3\Auth;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
 
class Model_User_Param extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id' 		=> new Engine\Field_Primary,
				'name'		=> new Engine\Field_String,
				'label'		=> new Engine\Field_String_Multilingual,
			));
   }
}