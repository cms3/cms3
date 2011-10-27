<?php

namespace CMS3\Properties;

use
	CMS3\Engine\ORM,
	CMS3\Engine\ORM_Meta;

class Model_Property_Value_String extends Model_Property_Value {
	
	public static function initialize(ORM_Meta $meta)
	{
		parent::initialize($meta);

		static::extend_fields($meta, array(
			'value' => ORM::field('string',
				array(
					'multilang' => TRUE,
					'table' => 'properties__property_value_strings',
					'foreign_column' => 'property_value_id'

				)
			)
		));
	}
}
