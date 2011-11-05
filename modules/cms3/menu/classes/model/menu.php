<?php

namespace CMS3\Menu;

use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;

class Model_Menu extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'	=> ORM::field('primary'),
			'title'	=> ORM::field('string', array(
				'multilang' => TRUE
			)),
			'items'	=> ORM::field('hasmany', array(
			    'foreign' => 'item.menu_id',
				'tree' => TRUE
			)),
		));
   }
}
