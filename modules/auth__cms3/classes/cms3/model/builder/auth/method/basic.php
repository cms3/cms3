<?php defined('SYSPATH') or die ('No direct script access.');

class CMS3_Model_Builder_Auth_Method_Basic extends Jelly_Builder
{
	public function by_username($username)
	{
		return $this->where('username', '=', $username)->limit(1);
	}
	
}