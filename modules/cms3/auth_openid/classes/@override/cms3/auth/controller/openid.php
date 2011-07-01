<?php

namespace CMS3\Auth;

use CMS3\Engine\Controller_Component;
 
class Controller_OpenID extends Controller_Component {

	public function action_finish_auth($params = array())
	{
		Method_OpenID::finish();
	}
}