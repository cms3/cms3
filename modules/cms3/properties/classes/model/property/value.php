<?php

namespace CMS3\Properties;

use
	CMS3\Engine\Model,
	CMS3\Engine\ORM,
	CMS3\Engine\ORM_Meta;

abstract class Model_Property_Value extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id' 	=> ORM::field('primary', 
				array('column' => 'property_value_id')
			)
		));
	}
}