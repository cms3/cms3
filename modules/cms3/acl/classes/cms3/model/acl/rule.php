<?php

namespace CMS3\Acl;

use CMS3\Engine;

class Model_Acl_Rule extends Acl_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		$meta
			->fields(array(
				'id' 		=> new Field_Primary,
				'user' 		=> new Field_BelongsTo,
				'role'		=> new Field_BelongsTo,
				'resource' 	=> new Field_String(array(
					'rules'		=> array(
						'max_length' => array(100),
					)
				)),
				'action'	=> new Field_String(array(
					'rules'		=> array(
						'max_length' => array(100),
					)
				)),
				'condition'	=> new Field_BelongsTo,
				'allow'		=> new Field_Boolean,	
			));
   }
}
