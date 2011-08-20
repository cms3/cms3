<?php

namespace CMS3\Content;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;

class Model_Item extends Model {
/*
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id'			=> ORM::field('primary'),
				'user'			=> ORM::field('belongsto',
					array(
						'namespace' => 'cms3\auth',
						//'default' 	=> \Auth::instance()->current_user()->id
					)
				),
				'state'			=> ORM::field('integer'),
				'title'			=> ORM::field('string_multilang'),
				'text'			=> ORM::field('text_multilang'),
				'publish'		=> ORM::field('boolean', array(
					'filtration' => array(
						'enabled' => 'is_filter_enabled'
						'default' => (new Function_Handler()->name = 'filter_default')
					)
				)),
			));
   }
   
   protected function filter_default()
   {
		if ($user->type == 1)
		{
			return true
		}
		else
		{
			if ($user->type == 2)
			{
				return false
			}
		}
   
   }

a.download {
	display: block;
	text-decoration: none;
}
a.download .title {
	font-size: 1.2em;
}
a.download .info {
	font-size: 0.8em;
}

*/
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
				'text'			=> ORM::field('text_multilang'),
			));
   }
}