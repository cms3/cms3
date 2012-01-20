<?php

namespace CMS3\Menu;

use CMS3\Engine\App;
use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\Request;
use CMS3\Engine\URL;

class Model_Item extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->sorting(array('ordering' => 'ASC'));
		
		$meta->fields(array(
			'id'					=> ORM::field('primary'),
			'menu'					=> ORM::field('belongsto'),
			'parent'				=> ORM::field('belongsto',
				array('foreign' => 'item')
			),
			'route'					=> ORM::field('belongsto',
				array('namespace' => 'cms3\engine')
			),
			'uri'					=> ORM::field('string'),
			'title'					=> ORM::field('string', array(
				'multilang' => TRUE
			)),
			'active_condition'  	=> ORM::field('belongsto',
				array('foreign' => 'cms3\engine\condition')
			),
			'ordering'				=> ORM::field('integer'),
			'params'				=> ORM::field('params'),
			'children'				=> ORM::field('hasmany', array(
				'foreign' => 'item.parent',
				'tree' => TRUE
			)),
		));
	}
	
	public function get_uri()
	{
		if ($this->uri != '')
		{
			return $this->uri;
		}
		/*
		elseif ($this->route->id)
		{
			return App::instance()->get_uri($this->route->id, (array) $this->params);
		}
		*/
		else
		{
			return URL::query((array) $this->params, FALSE);
		}
	}
	
	public function is_active()
	{
		if (! empty($this->active_condition->condition))
		{
			return App::instance()->check_page_condition($this->active_condition);
		}
		else
		{
			$params = (array) $this->params;

			if (! count($params))
			{
				return ! count(Request::current()->param());
			}

			foreach ($params as $name => $value)
			{
				if (@$_GET[$name] != $value)
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
	
	public function virtual_fields()
	{
		$fields = array(
			'uri'		=> $this->get_uri(),
			'selected'	=> $this->is_selected(),
			'active'	=> $this->is_active()
		);

		return $fields;
	}
}