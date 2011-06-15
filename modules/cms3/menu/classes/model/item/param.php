<?php

namespace CMS3\Menu;

use CMS3\Engine\ORM;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;

class Model_Item_Param extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id' 	=> ORM::field('primary'),
				'item'	=> ORM::field('belongsto'),
				'name'	=> ORM::field('string'),
				'value'	=> ORM::field('string')
			));
   }
   
}
