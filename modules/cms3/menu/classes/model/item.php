<?php

namespace CMS3\Menu;

use CMS3\Engine\App;
use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\Request;

class Model_Item extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'					=> ORM::field('primary'),
			'menu'					=> ORM::field('belongsto'),
			'parent_id'				=> ORM::field('integer'),
			'route'					=> ORM::field('belongsto',
				array('namespace' => 'cms3\engine')
			),
			'route_id'				=> ORM::field('integer'),
			'uri'					=> ORM::field('string'),
			'title'					=> ORM::field('string_multilang'),
			'active_condition_id'	=> ORM::field('integer'), // TODO
			'ordering'				=> ORM::field('integer'),
			'params'				=> ORM::field('params'),
			'children'				=> ORM::field('hasmany',
				array('foreign' => 'item.parent_id')
			),
		));
	}
	
	public function get_uri()
	{
		if ($this->uri != '')
		{
			return $this->uri;
		}
		elseif ($this->route_id)
		{
			return App::instance()->get_uri($this->route_id, (array) $this->params);
		}
		else
		{
			return '/';
		}
	}
	
	public function is_active()
	{
		if (! empty($this->active_condition))
		{
			return App::instance()->check_page_condition($this->active_condition);
		}
		else
		{
			$params = (array) $this->params;
			$params = App::instance()->implode_request_params($params); // TODO: Непонятно, нужно ли делать здесь implode

			if (! count($params))
			{
				return ! count(Request::current()->param());
			}
			
			foreach ($params as $name => $value)
			{
				if (Request::$initial->param($name) != $value)
				{
					return false;
				}
			}
			return true;
		}
	}
	
	public function is_selected()
	{
		return $this->is_active() || $this->_is_child_active();
	}
	
	private function _is_child_active()
	{
		foreach ($this->children as $item)
		{
			if ($item->is_active())
			{
				return true;
			}
		}
		return false;
	}
}