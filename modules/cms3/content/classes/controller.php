<?php

namespace CMS3\Content;

use CMS3\Engine\ORM;
use CMS3\Engine\Exception;
use CMS3\Engine\Controller_Component;
use CMS3\Engine\Request;
use CMS3\Engine\Model;
use CMS3\Engine\App;

class Controller extends Controller_Component {
	
	public function action_display($params = array())
	{
		$item_id = (int)$this->component->get_param('item_id');  // TODO: автоматически
		if ($item_id)
		{
			$this->display('item', array('item_id' => $item_id));
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
		if (! isset($params['item_id']))
		{
			throw new Exception('Content ID doesn\'t set'); 
		}
		$item = Model_Item::factory()->query($params['item_id'])->select();
		if (! $item->loaded())
		{
			throw new \HTTP_Exception_404();
		}
		
		echo $this->component->get_view('article', array('title' => $item->title, 'text' => $item->text, 'user' => $item->user));
	}
}
