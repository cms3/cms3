<?php

namespace CMS3\Engine;

class Model extends \Jelly_Model implements \Acl_Resource_Interface {

	public $language;
	
	public function __construct($key = NULL)
	{
		$this->language = App::instance()->language;
		parent::__construct($key);
	}
	
	public function save($validation = NULL)
	{
		$key = $this->_original[$this->_meta->primary_key()];

		// Run validation
		if ($validation !== FALSE)
		{
			$this->check($validation);
		}

		// These will be processed later
		$values = $saveable = array();

		// Trigger callbacks and ensure we should proceed
		if (FALSE === $this->_meta->events()->trigger('model.before_save', $this))
		{
			return $this;
		}

		// Iterate through all fields in original in case any unchanged fields
		// have save() behavior like timestamp updating...
		foreach ($this->_changed + $this->_original as $column => $value)
		{
			$field = $this->_meta->field($column);
			
			if ($field->in_db)
			{
				// See if field wants to alter the value on save()
				$value = $field->save($this, $value, $key);
			}

			// Only save in_db values
			if ($field->in_db)
			{
				// Only set the value to be saved if it's changed from the original
				if ($value !== $this->_original[$column])
				{
					$values[$field->name] = $value;
				}
				// Or if we're INSERTing and we need to set the defaults for the first time
				else if ( ! $key AND ! $this->changed($field->name) AND ! $field->primary)
				{
					$values[$field->name] = $field->default;
				}
			}
			// Field can save itself,
			elseif ($field->supports(\Jelly_Field::SAVE) AND $this->changed($column))
			{
				$saveable[$column] = $value;
			}
		}

		// If we have a key, we're updating
		if ($key)
		{
			// Do we even have to update anything in the row?
			if ($values)
			{
				Jelly::query($this, $key)
					 ->set($values)
					 ->update();
			}
		}
		else
		{
			list($id) = ORM::query($this)
							 ->columns(array_keys($values))
							 ->values(array_values($values))
							 ->insert();

			// Gotta make sure to set this
			$this->_changed[$this->_meta->primary_key()] = $id;
			$values[$this->_meta->primary_key()] = $id;
		}

		// Re-set any saved values; they may have changed
		foreach ($values as $column => $value)
		{
			$this->set($column, $value);
		}

		// Set the changed data back as original
		$this->_original = array_merge($this->_original, $this->_changed);

		// We're good!
		$this->_loaded = $this->_saved = TRUE;
		$this->_retrieved = $this->_changed = array();

		// Save the relations
		foreach ($saveable as $field => $value)
		{
			$this->_meta->field($field)->save($this, $value, (bool) $key);
		}

		// Trigger post-save callback
		$this->_meta->events()->trigger('model.after_save', $this);

		return $this;
	}
	
	public static function factory($model = NULL, $key = NULL)
	{
		if ($model === NULL)
		{
			$model = get_called_class(); 
		}
		elseif (strpos($model, '-') !== FALSE) // param-encoded model names with namespace
		{
			$model = str_replace('-', '\\', $model);
		}
		elseif (! NS::have_namespace($model))
		{
			$namespace = NS::extract_namespace(get_called_class());
			$model = NS::add_namespace($model, $namespace);
		}
		
		return ORM::factory($model, $key);
	}
	
	public function query($key = NULL)
	{
		return ORM::query($this, $key);
	} 
	
	public function get_resource_id()
	{
		return ORM::model_name($this);
	}
	
	public function class_name()
	{
		return get_class($this);
	}
	
	public function class_param()
	{
		$param = NS::remove_class_prefix($this->class_name(), 'Model_');
		$param = strtolower(str_replace('\\', '-', $param));
		
		return $param;
	}
}
