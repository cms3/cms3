<?php

namespace CMS3\Content;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\Wrapper_Method;

class Model_Item extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'			=> ORM::field('primary'),
			'user'			=> ORM::field('belongsto',
				array(
					'namespace' => 'cms3\auth',
				)
			),
			'state'			=> ORM::field('integer'),
			'title'			=> ORM::field('string_multilang'),
			'text'			=> ORM::field('text_multilang', array(
				'filtration' => array(
					'enabled' => static::method('get_text_filter_enabled'),
					'default' => static::method('get_text_default')
				)
			)),
		));
	}

	public static function get_text_default()
	{
		return '555';
	}

	public static function get_text_filter_enabled()
	{
		return TRUE;
	}
}
