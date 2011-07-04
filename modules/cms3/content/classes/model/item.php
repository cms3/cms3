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
					array('namespace' => 'cms3\auth')
				),
				'state'			=> ORM::field('integer'),
				'user'			=> ORM::field('belongsto',
					array('foreign' => 'cms3\auth\user.:primary_key')
				),
				'title'			=> ORM::field('string_multilang'),
				'text'			=> ORM::field('text_multilang'),
			));
   }
}