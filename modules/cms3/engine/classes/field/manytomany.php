<?php

namespace CMS3\Engine;

class Field_ManyToMany extends \Jelly_Field_ManyToMany implements Field_Relationship_Interface
{
	public $namespace = NULL;

	public function initialize($model, $column)
	{
		// Default to the name of the column
		if (empty($this->foreign))
		{
			$foreign_model = \Inflector::singular($column);
			$this->foreign = $foreign_model.'.'.$foreign_model.':primary_key';
		}
		// Is it model.field?
		elseif (is_string($this->foreign) AND FALSE === strpos($this->foreign, '.'))
		{
			$this->foreign = $this->foreign.'.'.$this->foreign.':primary_key';
		}
		// Create an array from them for easier access
		if ( ! is_array($this->foreign))
		{
			$this->foreign = array_combine(array('model', 'field'), explode('.', $this->foreign));
		}

		if (! NS::have_namespace($this->foreign['model']))
		{
			if ($this->namespace != NULL)
			{
				$this->foreign['model'] = NS::add_namespace($this->foreign['model'], $this->namespace);
			}
			elseif ($namespace = NS::extract_namespace($model))
			{
				$this->foreign['model'] = NS::add_namespace($this->foreign['model'], $namespace);
			}
		}

		if (empty($this->through))
		{
			// Find the join table based on the two model names pluralized,
			// sorted alphabetically and with an underscore separating them
			$through = array(
				\Inflector::plural(NS::extract_class_name($this->foreign['model'])),
				\Inflector::plural($model)
			);

			sort($through);
			$this->through = implode('_', $through);
		}

		parent::initialize($model, $column);
	}

	protected function _in($model, $as_array = FALSE)
	{
		//  TODO: убрать этот копипастный из Meta костыль!

		$through =  $this->through['model'];

		$module = NS::extract_module_name($through);
		$class = NS::extract_class_name($through);

		$table = DB::add_table_module($class, $module);

		$result = \Jelly::query($table)
		               ->select_column($this->through['fields'][1], 'in')
		               ->where($this->through['fields'][0], '=', $model->id())
		               ->type(\Database::SELECT);

		if ($as_array)
		{
			$result = $result->select($model->meta()->db())
			                 ->as_array(NULL, 'in');
		}

		return $result;
	}

	public function save($model, $value, $loaded)
	{
		// Don't do anything on insert when we don't have anything
		if ( ! $loaded AND empty($value)) return;

		// Find all current records so that we can calculate what's changed
		$in = ($loaded) ? $this->_in($model, TRUE) : array();

		$through =  $this->through['model'];

		$module = NS::extract_module_name($through);
		$class = NS::extract_class_name($through);

		$table = DB::add_table_module($class, $module);

		// Find old relationships that must be deleted
		if ($old = array_diff($in, (array)$value))
		{
			ORM::query($table)
			     ->where($this->through['fields'][0], '=', $model->id())
			     ->where($this->through['fields'][1], 'IN', $old)
			     ->delete($model->meta()->db());
		}

		// Find new relationships that must be inserted
		if ($new = array_diff((array)$value, $in))
		{
			foreach ($new as $new_id)
			{
				ORM::query($table)
					 ->columns($this->through['fields'])
					 ->values(array($model->id(), $new_id))
					 ->insert($model->meta()->db());
			}
		}
	}
}