<?php

namespace CMS3\Shop;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;

class Model_Products_Image extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'product'	=> ORM::field('belongsto'),
			'image'		=> ORM::field('belongsto'),
			'ordering'  => ORM::field('integer')
		));
	}
}
