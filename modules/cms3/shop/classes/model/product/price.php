<?php

namespace CMS3\Shop;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\Wrapper_Method;

class Model_Product_Price extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'			    => ORM::field('primary'),
			'product'          	=> ORM::field('belongsto', array(
					'select_type' => 'list'
			)),
			/*'role'			    => ORM::field('belongsto', array(
					'namespace' => 'cms3\acl'
			)),*/
			'price'             => ORM::field('float'),
			'auto_complete'     => ORM::field('boolean')
		));
	}
}
