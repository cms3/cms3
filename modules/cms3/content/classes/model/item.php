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
			/*'state'			=> ORM::field('integer'),*/
			'title'			=> ORM::field('string', array(
                'label' => __('Title'),
                'multilang' => TRUE
			)),
			'text'			=> ORM::field('text', array(
                'label' => __('Text'),
				'multilang' => TRUE,
				'filtration' => array(
					'enabled' => static::method('get_text_filter_enabled'),
					'default' => static::method('get_text_default')
				)
			)),
            'user'			=> ORM::field('belongsto', array(
                'label' => __('Author'),
                'namespace' => 'cms3\auth',
                'select_type' => 'list'
            ))
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
