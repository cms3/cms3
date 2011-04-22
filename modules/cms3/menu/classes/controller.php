<?php

namespace CMS3\Menu;

use CMS3\Engine\ORM;
use CMS3\Engine\Exception;
use CMS3\Engine\Controller_Component;

class Controller extends Controller_Component {
  
  public function action_display($params = array())
  {
		if (empty($params['menu_id']))
		{
			throw new Exception('Menu ID doesn\'t set'); 
		}
		$menu = ORM::query('cms3\menu\menu', $params['menu_id'])->select();
		$items = $menu->get_items_array();
		
		echo $this->component->get_view('menu', array('items' => $items));
  }
}
