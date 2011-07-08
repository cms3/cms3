<?php

namespace CMS3\Content;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;

class Model_Item extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id'			=> ORM::field('primary'),
				'user'			=> ORM::field('belongsto',
					array(
						'namespace' => 'cms3\auth',
						'default' 	=> \Auth::instance()->current_user()->id
					)
				),
				'state'			=> ORM::field('integer'),
				'title'			=> ORM::field('string_multilang'),
				'text'			=> ORM::field('text_multilang'),
			));
   }
}