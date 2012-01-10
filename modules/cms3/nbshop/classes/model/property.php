<?php

namespace CMS3\NBShop;

use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;

class Model_Property extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->table('nbshop__properties');
		$meta->fields(array(
			'id'  => ORM::field('primary'),
			'product'  => ORM::field('belongsto', array(
				'namespace' => 'cms3\shop'
			)),
			'vendor' => ORM::field('belongsto'),
			'width' => ORM::field('integer'),
			'height' => ORM::field('integer'),
			'length' => ORM::field('integer'),
			'code_1c' => ORM::field('string')
		));
	}
}