<?php

namespace CMS3\Engine;

class ORM_Builder extends \Jelly_Builder {

	public function join($table, $type = 'INNER')
	{
		return parent::join($table, $type);
	}

	public function db($db = NULL)
	{
		return $this->_db($db);
	}

	public function make_alias($part1, $part2)
	{
		$path = $part1;
		if (! empty($part1) && ! empty($part2))
		{
			$path .= '_';
		}
		$path .= $part2;

		return $path;
	}

	public function filter(array $params = NULL)
	{
		$module = NS::extract_module_name($this->_model);
		$model = NS::extract_class_name($this->_model);

		if ($params === NULL && $module !== NULL && $model !== NULL)
		{
			$params = (array)(App::instance()->param($module, $model));
		}
		
		$alias = $this->make_alias($module, $model);
		foreach ($params as $name => $value)
		{
			if (! empty($name))
			{
				$this->_add_param_filter($this->_model, $name, $value, $alias);
			}
		}
		$this->group_by(ORM::meta($this->_model)->primary_key());
		//$this->_add_ordering($module . '.' . $model); TODO
		
		return $this;
	}
	
	protected function _add_ordering($model_path)
	{
		$ordering = App::instance()->ordering($model_path);
		if (! empty($ordering))
		{
			$this->order_by($ordering['column'], $ordering['dir']);
		}
	}

	protected function _add_param_filter($model, $name, $value, $basic_alias, $rel_alias = NULL)
	{
		$meta = ORM::meta($model);
		
		$parts = explode('.', $name);
		$field_name = array_shift($parts);
		
		if ($field = $meta->field($field_name))
		{
			$filter_rules = $field->get_filtration_rules();

			if (! $filter_rules->enabled)
			{
				return;
			}

			if (count($parts))
			{
				if ($field instanceof Field_Relationship_Interface)
				{
					$rel_alias = $this->make_alias($rel_alias, $field_name);
					$alias = $this->make_alias($basic_alias, $rel_alias);

					$sub_model = $field->add_filter($model, $value, $this, $alias);
					$sub_name = implode('.', $parts);
					
					$this->_add_param_filter($sub_model, $sub_name, $value, $basic_alias, $rel_alias);
				}
			}
			else
			{
				$alias = ($rel_alias === NULL) ? NULL : $this->make_alias($basic_alias, $rel_alias);
				$field->add_filter($model, $value, $this, $alias);
			}
		}
	}

	protected function _get_value()
	{
		return $this->_protection_data[$this->_current_value];
	}

	protected function _get_model_default_filters($model)
	{
		$meta = ORM::meta($model);

		foreach ($meta->fields() as $field)
		{

		}
	}
}
