<?php

namespace CMS3\Auth;

use CMS3\Engine\ORM_Builder;

class Model_Builder_Auth_Token extends ORM_Builder
{
	public function load($key = NULL)
	{
		$obj = parent::load($key);

		if ($obj->loaded() && $obj->expires < time())
		{
			//$obj->delete();
		}

		return $obj;
	}
	
}