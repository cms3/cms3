<?php

namespace CMS3\Engine;

use CMS3\Properties\Model_Property;

class Field_Properties extends \Jelly_Field implements \Jelly_Field_Supports_AddRemove,	\ArrayAccess, \Iterator, \Countable,
	Field_Supports_Change
{
	public $in_db = FALSE;
	
	public $through = NULL;
	
	public $value_through = NULL;  
	
	public $types = array();
	
	protected $_properties = array();
	
	protected $_loaded = FALSE;
	
	protected $_module = NULL;
	
	public function initialize($model, $column)
	{
		parent::initialize($model, $column);
		
		$this->_module = NS::extract_module_name($model);
		$class = NS::extract_class_name($model);
		
		if (empty($this->through))
		{
			$through = array(
				\Inflector::plural($class),
				'properties'
			);

			sort($through);
			$this->through['table'] = DB::add_table_module(implode('_', $through), $this->_module);
			$this->through['column'] = ORM::meta($model)->foreign_key();
		}
		
		if (empty($this->value_through))
		{
			$through = array(
				\Inflector::plural($class),
				'property_values'
			);

			sort($through);
			$this->value_through['table'] = DB::add_table_module(implode('_', $through), $this->_module);
			$this->value_through['column'] = ORM::meta($model)->foreign_key();
		}

		//TODO
		$this->types = array(
			'boolean',
			'float',
			'integer',
			'string'
		);
	}
	
	public function get($model, $value)
	{
		if (! $this->_loaded)
		{
			$this->_load_models($model);
		}
		
		return $this;
	}
	
	public function all()
	{
		return $this->_properties;
	}
	
	public function as_array(array $fields = NULL)
	{
		$result = array();
		foreach ($this->_properties as $name => $property)
		{
			if ($fields === NULL || in_array($name, $fields))
			{
				$result[$name] = (string)$property;
			}
		}
		return $result;
	}
	
	public function &__get($name)
	{
		if (isset($this->_properties[$name]))
		{
			return $this->_properties[$name];
		}
		else
		{
			return $this->$name;
		}
	}
	
	public function __set($name, $value)
	{
		if (isset($this->_properties[$name]))
		{
			$this->_properties[$name]->set_value($value);
		}
		else if ($value instanceof Model_Property)
		{
			// TODO: implement
			throw new Exception('Not implemented');
		}
		else
		{
			throw new Exception('New property must be an Model_Property instance');
		}
	}
	
	public function save($model, $value, $loaded)
	{
		$id = $model->id();
		if (! $id)
		{
			return $value;
		}
		
		$changed_ids = array();
		foreach ($this->_properties as $property)
		{
			if ($property->changed())
			{
				$property->save();
				$changed_ids[] = $property->id();
			}
		}
		$this->_save_relationships($id, $changed_ids);
		
		return $value;
	}
	
	protected function _save_relationships($model_id, $ids)
	{
		// TODO: write properties relationships and ordering
		if ($model_id)
		{
			ORM::query($this->value_through['table'])
				->where($this->value_through['column'], '=', $model_id)
				->where('property_id', 'IN', $ids);
			
			foreach ($this->_properties as $property)
			{
				if (in_array($property->id(), $ids) && $property->_value->id())
				{
					ORM::query($this->value_through['table'])
						->columns(array($this->value_through['column'], 'property_id', 'value_id'))
						->values(array($model_id, $property->id(), $property->_value->id()))
						->insert();
				}
			}
		}
	}
	
	public function redefine_list()
	{
		$list = array();
		foreach ($this->_properties as $property)
		{ 
			$list[$property->name] = $property; 
		}
		$this->_properties = $list;
		
		return $this;
	}
	
	/**
	 * Implementation of the Field_Supports_Change interface
	 *
	 * @return  int
	 */
	public function changed()
	{
		foreach ($this->_properties as $property)
		{
			if ($property->changed())
			{
				return TRUE;
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Implementation of the Countable interface
	 *
	 * @return  int
	 */
	public function count()
	{
		return count($this->_properties);
	}
	
	/**
	 * ArrayAccess: offsetExists
	 *
	 * @param   mixed  $offset
	 * @return  boolean
	 */
	public function offsetExists($offset)
	{
		return isset($this->_properties[$offset]);
	}

	/**
	 * ArrayAccess: offsetGet
	 *
	 * @param   mixed  $offset
	 * @return  array
	 */
	public function offsetGet($offset)
	{
		return $this->_properties[$offset];
	}
	
	/**
	 * ArrayAccess: offsetSet
	 *
	 * @param   mixed  $offset
	 * @param   object $value
	 * @return  void
	 */
	public function offsetSet($offset, $value)
	{
		if (! $value instanceof Model_Property)
		{
			throw new Exception('Value must be an instance of Model_Property');
		}
		$this->_properties[$offset] = $value;
	}
	
	/**
	 * ArrayAccess: offsetUnset
	 *
	 * @param   mixed  $offset
	 * @return  void
	 */
	public function offsetUnset($offset)
	{
		if (isset($this->_properties[$offset]))
		{
			unset($this->_properties[$offset]);
		}
	}
	
	/**
	 * Implementation of the Iterator interface
	 */
	public function rewind()
	{
		reset($this->_properties);
		
		return $this;
	}

	/**
	 * Implementation of the Iterator interface
	 */
    public function current()
	{
        $var = current($this->_properties);
        
        return $var;
	}

	/**
	 * Implementation of the Iterator interface
	 */
	public function key()
	{
		$var = key($this->_properties);
		
		return $var;
	}

	/**
	 * Implementation of the Iterator interface
	 */
	public function next()
	{
		$var = next($this->_properties);
		
		return $var;
	}

	/**
	 * Implementation of the Iterator interface
	 *
	 * @return  boolean
	 */
	public function valid()
	{
		$key = key($this->_properties);
        $var = ($key !== NULL && $key !== FALSE);
        
        return $var;
	}
	
	/**
	 * 
	 */
	protected function _load_models($model)
	{
		$this->_properties = array();
		
		$list = $this->_get_property_list($model->id());
		$properties = $this->_load_properties($model->id(), $this->types, $list);
		
		foreach (array_keys($list) as $id)
		{
			$property = $properties[$id];
			$this->_properties[$property->name] = $property;
		}
		
		$this->_loaded = TRUE;
	}
	
	protected function _get_property_list($model_id)
	{
		$result = array();
		
		$ordering = ORM::query($this->through['table'])
			->where($this->through['column'], '=', $model_id)
			->or_where($this->through['column'], '=', NULL)
			->order_by('ordering', 'asc')
			->select()
			->as_array('property_id');
		$ids = array_keys($ordering);

		if (count($ids))
		{
			$items_table = DB::add_table_module('properties', 'properties');
			$items = ORM::query($items_table)
				->where('id', 'IN', $ids)
				->select()
				->as_array('id');
				
			foreach ($ordering as $key => $fields)
			{
				$result[$key] = \Arr::merge($fields, $items[$key]);
			}
		}
		
		return $result;
	}
	
	protected function _load_properties($model_id, $types, $skeleton)
	{
		$result = array();
		
		if (count($skeleton))
		{
			$all_fields = array();
			foreach ($types as $type)
			{
				$table = 'property_' . \Inflector::plural($type);
				$table = DB::add_table_module($table, 'properties');
				$fields = ORM::query($table)
					->where('property_id', 'IN', array_keys($skeleton))
					->select()
					->as_array('property_id');
				foreach ($fields as $key => $field)
				{
					$field['_type'] = $type;
					$all_fields[$key] = $field;  
				}
			}
			
			$ids = array_keys($all_fields);
			if (count($ids))
			{
				$values = $this->_load_property_values($model_id, $ids);
				$properties = \Arr::merge($skeleton, $all_fields, $values);
				
				foreach ($properties as $id => $property)
				{
					$result[$id] = $this->_load_property($property['_type'], $property);
				}	
			}
		}
		
		return $result;
	}
	
	protected function _load_property_values($id, $property_ids)
	{
		$values = ORM::query($this->value_through['table'])
			->where($this->value_through['column'], '=', $id)
			->where('property_id', 'IN', $property_ids)
			->select()
			->as_array('property_id');
			
		return $values;
	}
	
	protected function _load_property($type, $fields)
	{
		$model_class = NS::add_namespace(NS::add_class_prefix($type, 'Property_'), 'CMS3\Properties');
		
		$property = Model::factory($model_class);
		$property->load_values($fields);
		$property->set('_properties', $this);

		return $property;
	}
}
