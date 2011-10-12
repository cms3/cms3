<?php

namespace CMS3\Engine;

class ORM_Field extends \Jelly_Core_Field {
	
	public function add_filter($model, $value, $builder, $alias = NULL)
	{
		if ($this->in_db)
		{
			$table = (! empty($alias)) ? $alias . '.' : '';
			$builder->where($table . $this->column, '=', $value);
		}

		// need to return?
	}

	public function get_filtration_rules()
	{
		$rules = new \StdClass();
		$rules->enabled = TRUE; // TODO: false by default

		if (isset($this->filtration['enabled']))
		{
			$rules->enabled = $this->filtration['enabled'];
			if ($rules->enabled instanceof Wrapper_Interface)
			{
				$rules->enabled = $rules->enabled->call();
			}
			$rules->enabled = (bool) $rules->enabled;
		}
		if (isset($this->filtration['default']))
		{
			$rules->default = $this->filtration['default'];
			if ($rules->default instanceof Wrapper_Interface)
			{
				$rules->default = $rules->default->call();
			}
		}

		return $rules;
	}
}
