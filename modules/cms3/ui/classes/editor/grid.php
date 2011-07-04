<?php

namespace CMS3\UI;

use CMS3\Engine\HTML;

class Editor_Grid extends Editor {
	
	public function render()
	{
		if ($this->data === NULL)
		{
			return NULL;
		}
		
		$class = $this->_model->class_param(); 

		echo '<style type="text/css">table td { border: solid 1px lightgrey; padding: 3px; } table {border-collapse: collapse; } th  {background: lightgrey; border: solid 1px black; padding: 3px}</style>';
		echo '<table>';
		echo '<tr>';
		foreach ($this->_model->meta()->fields() as $field)
		{
			echo '<th>';
			echo $field->name;
			echo '</th>';
		}
		echo '<th></th>';
		echo '</tr>';
		foreach ($this->data as $item)
		{
			echo '<tr>';
			foreach ($this->_model->meta()->fields() as $field)
			{
				echo '<td>';
				if ($field->name == $this->_model->meta()->primary_key())
				{
					echo '<a href="/admin/' . $class . '/' . $item->{$field->name} . '">';
				}
				if (is_object($item->{$field->name}))
				{
					echo get_class($item->{$field->name});
				}
				else
				{
					echo HTML::chars($item->{$field->name});
				}
				if ($field->name == $this->_model->meta()->primary_key())
				{ 
					echo ' [edit]</a>';
				}
				echo '</td>';
			}
			echo '<td><a href="/action/cms3/admin/controller/delete_item?id=' . $item->{$this->_model->meta()->primary_key()} . '&model=' . $class . '">[X]</a></td>';
			echo '</tr>';
		}
		echo '<table>';
		
		echo '<br /><a href="/admin/' . $class . '/0">Add</a>';
	}
}
