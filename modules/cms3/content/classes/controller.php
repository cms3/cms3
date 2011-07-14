<?php

namespace CMS3\Content;

use CMS3\Engine\ORM;
use CMS3\Engine\Exception;
use CMS3\Engine\Controller_Component;
use CMS3\Engine\Request;

class Controller extends Controller_Component {
	
	public function action_display($params = array())
	{
		$item_id = $this->component->get_param('item_id');  // TODO: автоматически
		$this->display('item', array('item_id' => $item_id));
	}
	
	public function action_display_item($params = array())
	{
		if (! isset($params['item_id']))
		{
			throw new Exception('Content ID doesn\'t set'); 
		}
		$item = ORM::query('cms3\content\item', $params['item_id'])->select();
		if (! $item->loaded())
		{
			throw new \HTTP_Exception_404();
		}
		
		echo $this->component->get_view('article', array('title' => $item->title, 'text' => $item->text, 'user' => $item->user));
	}
}
