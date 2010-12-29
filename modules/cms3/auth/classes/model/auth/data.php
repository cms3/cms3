<?php

namespace CMS3\Auth;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
 
class Model_Auth_Data extends Model {	
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'user'		=> new Engine\Field_BelongsTo,
				'method'	=> new Engine\Field_BelongsTo,
				'data'		=> new Engine\Field_Text,
			));
   }
}