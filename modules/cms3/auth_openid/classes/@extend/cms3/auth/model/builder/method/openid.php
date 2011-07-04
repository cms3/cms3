<?php

namespace CMS3\Auth;

use CMS3\Engine\ORM_Builder;

class Model_Builder_Method_OpenID extends ORM_Builder
{
	public function by_openid($openid)
	{
		return $this->where('openid', '=', $openid)->limit(1);
	}
	
}