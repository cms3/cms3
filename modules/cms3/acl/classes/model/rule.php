<?php

namespace CMS3\Acl;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;

class Model_Rule extends Model  {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->sorting(array('ordering' => 'ASC'));
		$meta->fields(array(
			'id' 	=> ORM::field('primary'),
			'role'	=> ORM::field('string',
				array(
					'rules'	=> array('max_length' => array(100))
				)
			),
			'resource' => ORM::field('string',
				array(
					'rules'	=> array('max_length' => array(100))
				)
			),
			'privilege'	=> ORM::field('string',
				array(
					'rules'	=> array('max_length' => array(100))
				)
			),
			'assert_condition' => ORM::field('belongsto',
				array('model' => 'cms3\engine\condition')
			),
			'allow' => ORM::field('boolean'),
		));
   }
}
