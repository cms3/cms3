<?php

namespace CMS3\Shop;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\Wrapper_Method;

class Model_Product_Type extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'			    => ORM::field('primary'),
			'title'			    => ORM::field('string', array(
				'multilang'     => TRUE,
				'show_in_list' => TRUE
			))
		));
	}
}
