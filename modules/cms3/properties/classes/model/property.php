<?php

namespace CMS3\Properties;

use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\DB;
use CMS3\Engine\Exception;

class Model_Property extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->sorting(array('ordering' => 'ASC'));
		
		$meta->fields(array(
			'id' 		=> ORM::field('primary'),
			'ordering'	=> ORM::field('integer'),
			'name'		=> ORM::field('string')
		));
		$meta->data['basic_fields'] = array_merge(array_keys($meta->fields()), array('_value'));
	}
	
	public function &__get($name)
	{
		if (! in_array($name, $this->_meta->data['basic_fields']) && (bool)$this->_value->meta()->field($name))
		{	
			if (! $this->_value->changed($name) && ! $this->_value->loaded() && ($value_id = $this->get('value_id')))
			{
				$this->_value->load($value_id);
			}
			$result = $this->_value->$name;
			
			return $result;
		}
		return parent::__get($name);
	}
	
	public function __set($name, $value)
	{
		if (! in_array($name, $this->_meta->data['basic_fields']) && (bool)$this->_value->meta()->field($name))
		{
			$this->_value->$name = $value;
		}
		else
		{
			parent::__set($name, $value);
			if ($name == 'name')
			{
				$this->get('_properties')->redefine_list();
			}
		}
	}
	
	public function save($validation = NULL)
	{
		if ($this->changed())
		{
			if (! $this->name)
			{
				throw new Exception('Property name must be not empty');
			}
			
			$table = DB::add_table_module('properties', 'properties');
			if (! $this->id())
			{
				ORM::query($table)
					->columns(array('name'))
					->values(array($this->name))
					->insert();
			}
			elseif ($this->changed('name'))
			{
				ORM::query($this->through['table'])
					->set(array('name' => $this->name))
					->where('id', '=', $this->id())
					->update();
			}
		}
		if ($this->_value->changed())
		{
			$this->_save_value();
		}
		
		$orig = $this->_value->_original;
		parent::save($validation);
		$this->_value->_original = $orig; // TODO: 	very ugly
	}
	
	protected function _save_value()
	{
		if (! $this->_value->id())
		{
			$table = DB::add_table_module('property_values', 'properties');
			
			$result = ORM::query($table)
				->columns(array('property_id'))
				->values(array($this->id()))
				->insert();
			
			if (! empty($result[0]))
			{
				$this->_value->id = $result[0];
			}					
		}
		$old_id = $this->_value->id;
		$this->_value->save();
		$this->_value->_original['id'] = $old_id; // TODO: 	very ugly
	}
	
	public function changed($field = NULL)
	{
		if (in_array($field, $this->_meta->data['basic_fields']))
		{
			return parent::changed($field);
		}
		
		return parent::changed($field) || $this->_value->changed($field);
	}
	
	public function get_value()
	{
		if ($this->_value->meta()->field('value'))
		{
			return $this->value;
		}
		else
		{
			return NULL;
		}
	}
	
	public function set_value($value)
	{
		if ($this->_value->meta()->field('value'))
		{ 
			$this->value = $value;
		}
	}
	
	public function __toString()
	{
		return (string)$this->get_value();
	}
}
