<?php

namespace CMS3\Dataview;
use \CMS3\Engine\Model;
use \CMS3\Engine\NS;
use \CMS3\Engine\Field_Relationship_Interface as Relationship;

class Helper_Dataview
{
	static public function clear_field($field)
	{
		$field->type = get_class($field);
		$field->type = NS::extract_class_name($field->type);
		$field->type = NS::remove_class_prefix($field->type, 'field_');
		$field->type = \inflector::camelize($field->type);

		if (@$field->filtration['default'] instanceof \ReflectionFunctionAbstract)
		{
			$field->filtration['default'] = $field->filtration['default']->invoke(NULL);
		}

		unset($field->in_db);
		unset($field->language_column);
		unset($field->table);
		unset($field->foreign_column);
		unset($field->allow_null);
		unset($field->model);
		unset($field->column);
		unset($field->foreign);
		unset($field->unique);
		unset($field->primary);
		unset($field->convert_empty);
		unset($field->empty_value);
		unset($field->convert_empty);
		unset($field->filters);
		unset($field->rules);
		unset($field->namespace);

		return $field;
	}

	static public function clear_items($items)
	{
		foreach ($items as $i => $item) {
			$items[$i] = (object) $item;
		}
		return $items;
	}

	static public function buildFields($model, $type='normal')
	{
		$fields = new \StdClass;
		foreach ($model->meta()->fields() as $id => $field)
		{
			$save_field = clone $field;
			$save_field = Helper_Dataview::clear_field($save_field);
			//TODO: костыль, потому, что show_in_list может быть не задан
			if (!isset($field->show_in_list))
			{
				$field->show_in_list = false;
			}

			//TODO: баг, загружается с оригинальными названиями полей. Раскомментировать, если будет исправлено.
			//if ($type == 'normal' or $field->show_in_list or $save_field->type == 'primary') {
				// TODO: Вынести это отдельно и сделать для каждого типа поля
				if ($field instanceof Relationship) {
					//TODO: костыль, потому, что show_in_list может быть не задан
					$field->select_type = $field->select_type <> 'list' ? 'normal' : $field->select_type;

					$child_model = Model::factory($field->foreign['model']);
					$save_field->model = Helper_Dataview::buildFields($child_model, $save_field->select_type);
				}
				$fields->{$id} = $save_field;
				$field_list[] = $id;
			//}
		}

		if ($type == 'list') {
			$items = $model ->query()
							->filter()
							//TODO: баг, загружается с оригинальными названиями полей
							//->select_column($field_list)
							->select()
							->as_array();
		} else {
			$items = $model ->query()
							->filter()
							->select()
							->as_array();
		}

		Helper_Dataview::clear_items(&$items);

		$model_class = $model->class_param();
		$model = new \StdClass;
		$model->fields = $fields;
		$model->items = $items;
		$model->model = $model_class;
		return $model;
	}

	/*

	$model = buildFields($this->model);
	$model->id = 'richGrid' . $this->block_id;
	$model->container = 'div#workspace';*/
}
