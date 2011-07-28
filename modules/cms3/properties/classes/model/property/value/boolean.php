<?php

namespace CMS3\Properties;

use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;

class Model_Property_Value_Boolean extends Model_Property_Value {
	
	public static function initialize(ORM_Meta $meta)
	{
		parent::initialize($meta);

		static::extend_fields($meta, array(
			'_value' 	=> ORM::field('boolean')
		));
	}
}
