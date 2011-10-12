<?php

namespace CMS3\UI_Grid;

use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\UI\Editor_List_Interface;

class Default_Controller extends Abstract_Controller implements List_Interface {

	public $model = NULL;
	
	public function action_display()
	{
		Model_Item::factory()->query()->filter()->select()->as_array();
	}
}
