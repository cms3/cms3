<?php

namespace CMS3\Engine;

class ORM_Field extends \Jelly_Core_Field {

	public $filtration = array();
	
	public function add_filter($value, $builder, $alias = NULL, $parent_alias = NULL)
	{
		if ($this->in_db)
		{
			$table = $alias ? ($alias . '.') : '';

			$elements = explode(',', $value);
			$builder->where($table . $this->column, 'IN', $elements);
		}
	}

	public function join($builder, $alias = NULL)
	{
		return NULL;
	}

	public function get_filtration_rules()
	{
		$rules = new \StdClass();
		
		$rules->enabled = TRUE; // TODO: false by default
		if (isset($this->filtration['enabled']))
		{
			$rules->enabled = (bool) $this->_calculate_value($this->filtration['enabled']);
		}
		$rules->default = $this->_calculate_value(@$this->filtration['default']);

		return $rules;
	}

	public function meta_data()
	{
		$result = clone $this;

		$result->filtration = (array)$this->get_filtration_rules();

		return (array)$result;
	}

	public function _calculate_value($value)
	{
		$result = $value;

		if ($result instanceof \ReflectionFunctionAbstract)
		{
			$result = $result->invoke(NULL);
		}

		return $result;
	}
}
