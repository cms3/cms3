<?php

namespace CMS3\Engine;

use CMS3\Engine\Model;

class Model_Theme extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta
			//->sorting(array('ordering' => 'ASC'))
			->fields(array(
				'id' 		=> new Field_Primary,
				'name' 		=> new Field_String,
				'condition'	=> new Field_BelongsTo,
			));
   }

} 