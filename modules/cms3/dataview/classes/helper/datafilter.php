<?php

namespace CMS3\Dataview;
 
class Helper_DataFilter
{
	public function unset_system_data()
	{
		$fields = array();

		foreach ($this->model->meta()->fields() as $id => $field)
		{
			$fields[$id] = clone $field;
			$field = $fields[$id];

			$field->type = get_class($field);

			$field->type = NS::extract_class_name($field->type);
			$field->type = NS::remove_class_prefix($field->type, 'field_');
			$field->type = inflector::camelize($field->type);
			unset($field->in_db);
			unset($field->language_column);
			unset($field->table);
			unset($field->foreign_column);
			unset($field->allow_null);
			unset($field->model);
			unset($field->column);
		//	unset($field->name);
			unset($field->unique);
			unset($field->primary);
			unset($field->convert_empty);
			unset($field->empty_value);
			unset($field->convert_empty);
			unset($field->filters);
			unset($field->rules);
			unset($field->namespace);
		}
	}
}
