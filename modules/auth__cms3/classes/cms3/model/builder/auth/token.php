<?php defined('SYSPATH') or die ('No direct script access.');

class CMS3_Model_Builder_Auth_Token extends Jelly_Builder
{
	public function load($key = NULL)
	{
		$obj = parent::load($key);

		if ($obj->loaded() AND $obj->expires < time())
		{
			//$obj->delete();
		}

		return $obj;
	}
	
}