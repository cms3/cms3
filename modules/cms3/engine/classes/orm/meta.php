<?php

namespace CMS3\Engine;

class ORM_Meta extends \Jelly_Meta_Core {
	
	public function finalize($model)
	{
		if ($this->initialized)
			return;

		// Ensure certain fields are not overridden
		$this->model = $model;
		$this->columns     =
		$this->defaults    =
		$this->field_cache =
		$this->aliases     = array();
		
		$namespace = NS::extract_namespace($model);
		$module = NS::extract_module_name($model);
		$class = NS::extract_class_name($model);

		// Table should be a sensible default
		if (empty($this->table))
		{
			$this->table = \Inflector::plural($class);
			if ($module != NULL)
			{
				$this->table = $module . '_' . $this->table;
			}
		}
		
		// See if we have a special builder class to use
		if (empty($this->builder))
		{
			$builder = NS::add_class_prefix($model, ORM::model_prefix() . 'builder_');
			
			if (class_exists($builder))
			{
				$this->builder = $builder;
			}
			else
			{
				$this->builder = 'CMS3\Engine\ORM_Builder';
			}
		}

		// Can we set a sensible foreign key?
		if (empty($this->foreign_key))
		{
			$this->foreign_key = $class . '_id';
		}

		// Initialize all of the fields with their column and the model name
		foreach($this->fields as $column => $field)
		{
			// Allow aliasing fields
			if (is_string($field))
			{
				if (isset($this->fields[$field]))
				{
					$this->aliases[$column] = $field;
				}

				// Aliases shouldn't pollute fields
				unset($this->fields[$column]);
			
				continue;
			}

			$field->initialize($model, $column);

			// Ensure a default primary key is set
			if ($field->primary AND empty($this->primary_key))
			{
				$this->primary_key = $column;
			}

			// Set the defaults so they're actually persistent
			$this->defaults[$column] = $field->default;

			// Set the columns, so that we can access reverse database results properly
			if ( ! array_key_exists($field->column, $this->columns))
			{
				$this->columns[$field->column] = array();
			}

			$this->columns[$field->column][] = $column;
		}

		// Meta object is initialized and no longer writable
		$this->initialized = TRUE;
	}
}