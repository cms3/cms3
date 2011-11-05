<?php

namespace CMS3\Shop;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\Wrapper_Method;

class Model_Product extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'			    => ORM::field('primary'),
			'title'			    => ORM::field('string', array(
				'multilang'     => TRUE
			)),
			'short_description'	=> ORM::field('text', array(
				'multilang' => TRUE,
			)),
			'description'	=> ORM::field('text', array(
				'multilang' => TRUE,
			)),
			'product_type'	=> ORM::field('belongsto',
				array(
					'select_type' => 'list'
				)
			),
			'price'         => ORM::field('hasmany'),
			'discontinued'	=> ORM::field('boolean')
		));
	}
}
