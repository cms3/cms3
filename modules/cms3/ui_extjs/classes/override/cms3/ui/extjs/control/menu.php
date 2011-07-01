<?php

namespace CMS3\UI;

class ExtJS_Control_Menu extends ExtJS_Control {
	
	public $name = 'Ext.menu.Menu';
	
	public function action_display_items()
	{
		echo json_encode($this->data->items);
	}
	
	public function add_item($text, $action = NULL)
	{
		$item = new \StdClass();
		$item->xtype = 'menuitem';
		$item->text = $text;
		if ($action !== NULL)
		{
			$item->listeners = new \StdClass();
			$item->listeners->click = new ExtJS_Handler(NULL, $action);
		}
		
		$this->data->items[] = $item;
		return $item;
	}
	
	public function add_separator()
	{
		$this->data->items[] = '-';
	}
	
	public function pre_render()
	{
		
	}
}