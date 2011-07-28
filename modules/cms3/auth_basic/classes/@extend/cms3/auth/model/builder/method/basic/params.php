<?php

namespace CMS3\Auth;

use CMS3\Engine\ORM_Builder;

class Model_Builder_Method_Basic_Params extends ORM_Builder
{
	public function by_username($username)
	{
		return $this->where('username', '=', $username)->limit(1);
	}
	
}