<?php

namespace CMS3\Content;

use CMS3\Engine\ORM;
use CMS3\Engine\Exception;
use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\Request;
use CMS3\Engine\Model;
use CMS3\Engine\App;
use CMS3\Engine\View;

class Controller extends Abstract_Controller {
	
	public function action_display($params = array())
	{
		$item_id = (int) Request::$initial->param('content/item/id');  // TODO: автоматически
		if ($item_id)
		{
			$this->display('item', array('item/id' => $item_id));
		}
		else
		{
			$this->display('list');
		}
	}
	
	public function action_display_list($params = array())
	{
		$items = Model_Item::factory()->query()->filter()->select()->as_array();
		//print_r($items); exit;
	}
	
	public function action_display_item($params = array())
	{
		if (! isset($params['item/id']))
		{
			throw new Exception('Content ID doesn\'t set'); 
		}
		$item = Model_Item::factory()->query($params['item/id'])->select();
		if (! $item->loaded())
		{
			throw new \HTTP_Exception_404();
		}
		
		$view_vars = array(
			'title' => $item->title,
			'text' => $item->text,
			'user' => $item->user
		);
		
		echo View::factory('cms3\content\article', $view_vars); // TODO
	}
}
