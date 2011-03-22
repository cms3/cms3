<?php

namespace CMS3\Menu;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;

class Model_Menu extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id'	=> new Engine\Field_Primary,
				'title'	=> new Engine\Field_String_Multilang,
				'items'	=> new Engine\Field_HasMany(array('foreign' => 'cms3\menu\item.menu_id')),
			));
   }
   
   public function get_child_items($parent = 0)
   {
		$items = ORM::select('cms3\menu\item')
			->where('parent_id', '=', $parent)
			->order_by('ordering', 'asc')
			->execute();
		return $items;
   }
   
   public function get_items_array($items = NULL)
   {
		if ($items === NULL)
		{
			$items = $this->get_child_items();
		}
		
		$array = array();
		foreach ($items as $item)
		{
			$array[] = array(
				"uri"		=> $item->get_uri(),
				"title"		=> $item->title,
				"selected"	=> $item->is_selected(),
				"active"	=> $item->is_active(),
				"children"	=> $this->get_items_array($item->children),
			);
		}
		return $array;
   }
}