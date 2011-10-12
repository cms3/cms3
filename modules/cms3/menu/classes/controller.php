<?php

namespace CMS3\Menu;

use CMS3\Engine\ORM;
use CMS3\Engine\Exception;
use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\View;

class Controller extends Abstract_Controller {
  
  public function action_display($params = array())
  {
		if (empty($params['menu_id']))
		{
			throw new Exception('Menu ID doesn\'t set'); 
		}

		$menu = ORM::query('cms3\menu\menu', $params['menu_id'])->select();
		$items = $menu->get_items_array();
		
		$view_data = array(
			'items' => $items
		);
		
		echo View::factory('cms3\menu\menu', $view_data); // TODO
  }
}
