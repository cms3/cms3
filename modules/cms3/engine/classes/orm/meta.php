<?php

namespace CMS3\Engine;

class ORM_Meta extends \Jelly_Core_Meta {
	
	public $data = NULL;

	protected $_language = NULL;

	public function finalize($model)
	{
		if ($this->_initialized)
			return;
			
		// Set up event system
		$this->_events = new \Jelly_Event($model);
		
		// Initialize behaviors
		foreach ($this->_behaviors as $name => $behavior)
		{
			$behavior->initialize($this->_events, $model, $name);
		}
			
		// Allow modification of this meta object by the behaviors
		$this->_events->trigger('meta.before_finalize', $this);

		// Ensure certain fields are not overridden
		$this->_model       = $model;
		$this->_columns     =
		$this->_defaults    =
		$this->_field_cache =
		$this->_aliases     = array();
		
		$namespace = NS::extract_namespace($model);
		$module = NS::extract_module_name($model);
		$class = NS::extract_class_name($model);

		if (empty($this->_language))
		{
			$this->_language = App::instance()->language;
		}

		// Table should be a sensible default
		if (empty($this->_table))
		{
			$this->_table = \Inflector::plural($class);
			$this->_table = DB::add_table_module($this->_table, $module);
		}
		
		// See if we have a special builder class to use
		if (empty($this->_builder))
		{
			$builder = NS::add_class_prefix($model, ORM::model_prefix() . 'builder_');
			
			if (class_exists($builder))
			{
				$this->_builder = $builder;
			}
			else
			{
				$this->_builder = 'CMS3\Engine\ORM_Builder';
			}
		}

		// Can we set a sensible foreign key?
		if (empty($this->_foreign_key))
		{
			$this->_foreign_key = $class . '_id';
		}

		// Initialize all of the fields with their column and the model name
		foreach($this->_fields as $column => $field)
		{
			// Allow aliasing fields
			if (is_string($field))
			{
				if (isset($this->_fields[$field]))
				{
					$this->_aliases[$column] = $field;
				}

				// Aliases shouldn't pollute fields
				unset($this->_fields[$column]);

				continue;
			}

			$field->initialize($model, $column);

			// Ensure a default primary key is set
			if ($field->primary AND empty($this->_primary_key))
			{
				$this->_primary_key = $column;
			}
			
			// Search for a polymorphic key
			if ( ! empty($field->polymorphic))
			{
				$this->_polymorphic_key = $field->name;
				
				// Add this class as a child if it hasn't been added yet
				if ( ! in_array($this->_model, $this->_children))	
				{
					$this->_children[] = $this->_model;
				}
			}

			// Set the defaults so they're actually persistent
			$this->_defaults[$column] = $field->default;
		}

		// Meta object is initialized and no longer writable
		$this->_initialized = TRUE;
		
		// Final meta callback
		$this->_events->trigger('meta.after_finalize', $this);
	}
	
	// Allow to override table every time
	public function table($value = NULL)
	{
		if (func_num_args() !== 0)
		{
			$this->_table = $value;
		}

		return $this->_table;
	}

	public function language($value = NULL)
	{
		if (func_num_args() !== 0)
		{
			$this->_language = $value;
		}

		return $this->_language;
	}
}