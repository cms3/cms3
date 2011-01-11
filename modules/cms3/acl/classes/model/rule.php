<?php

namespace CMS3\Acl;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;

class Model_Rule extends Model  {

	public static function initialize(ORM_Meta $meta)
	{
		$meta
			->sorting(array('ordering' => 'ASC'))
			->fields(array(
				'id' 		=> new Engine\Field_Primary,
				'role'		=> new Engine\Field_String(array(
					'rules'		=> array(
						'max_length' => array(100),
					)
				)),
				'resource' 	=> new Engine\Field_String(array(
					'rules'		=> array(
						'max_length' => array(100),
					)
				)),
				'privilege'	=> new Engine\Field_String(array(
					'rules'		=> array(
						'max_length' => array(100),
					)
				)),
				'assert_condition'	=> new Engine\Field_BelongsTo(array('model'	=> 'cms3\engine\condition')),
				'allow'		=> new Engine\Field_Boolean,	
			));
   }
}
