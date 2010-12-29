<?php

namespace CMS3\Menu;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;

class Model_Item_Param extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id' 	=> new Engine\Field_Primary,
				'item'	=> new Engine\Field_BelongsTo,
				'name'	=> new Engine\Field_String,
				'value'	=> new Engine\Field_String,
			));
   }
   
}