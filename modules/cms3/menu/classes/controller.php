<?php

namespace CMS3\Menu;

use CMS3\Engine\ORM;
use CMS3\Engine\Exception;
use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\View;

class Controller extends Abstract_Controller {
  
	public function action_display($params = array(), $template = NULL)
	{
		if (empty($params['menu_id']))
		{
			throw new Exception('Menu ID doesn\'t set');
		}
		$menu = ORM::query('cms3\menu\menu', $params['menu_id'])->select();

		$view_data = array(
			'items' => $menu->items->build_tree()
		);

		echo $this->view($template, 'cms3\menu\menu', $view_data);
	}
}
