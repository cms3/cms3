<?php

namespace CMS3\Menu;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\Request;

class Model_Item extends Model {

	private $params_hash = NULL;
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id'				=> new Engine\Field_Primary,
				'menu'				=> new Engine\Field_BelongsTo,
				'parent_id'			=> new Engine\Field_Integer,
				'route'				=> new Engine\Field_BelongsTo,
				'route_id'			=> new Engine\Field_Integer,
				'uri'				=> new Engine\Field_String,
				'title'				=> new Engine\Field_String_Multilang,
				'active_condition_id'	=> new Engine\Field_Integer, // TODO
				'ordering'			=> new Engine\Field_Integer,
				'params'			=> new Engine\Field_HasMany(array('foreign' => 'cms3\menu\item_param.item_id')),
				'children'			=> new Engine\Field_HasMany(array('foreign' => 'cms3\menu\item.parent_id')),
			));
   }
	
	public function is_active()
	{
		if (! empty($this->active_condition))
		{
			return \App::instance()->check_page_condition($this->active_condition);
		}
		else {
			$params = $this->get_params_hash();
			$params = \App::instance()->implode_request_params($params); // Непонятно, нужно ли делать здесь implode

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
	
	public function get_params_hash()
	{
		if ($this->params_hash != NULL)
		{
			return $this->params_hash;
		}

		$this->params_hash = array();
		foreach ($this->params as $param)
		{
			$this->params_hash[$param->name] = $param->value;
		}
		return $this->params_hash;
	}
	
	public function get_uri()
	{
		if ($this->uri != '')
		{
			return $this->uri;
		}
		elseif ($this->route_id)
		{
			$params = $this->get_params_hash();
			
			return \App::instance()->get_uri($this->route_id, $params);
		}
		else
		{
			return "/";
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