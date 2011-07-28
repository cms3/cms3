<?php

namespace CMS3\Properties;

use
	CMS3\Engine\ORM,
	CMS3\Engine\ORM_Meta;

class Model_Property_String extends Model_Property {
	
	public static function initialize(ORM_Meta $meta)
	{
		parent::initialize($meta);

		static::extend_fields($meta, array(
			'_value' => ORM::field('belongsto',
				array('foreign' => 'property_value_string')
			)
		));
	}
}
