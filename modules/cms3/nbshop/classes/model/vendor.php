<?php

namespace CMS3\NBShop;

use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;

class Model_Vendor extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'    => ORM::field('primary'),
			'title' => ORM::field('string', array(
				'multilang' => TRUE
			))
		));
	}
}