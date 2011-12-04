<?php

namespace CMS3\Dataview;
use \CMS3\Engine\Model;
use \CMS3\Engine\NS;
use \CMS3\Engine\Field_Relationship_Interface as Relationship;

class Helper_Dataview
{
	protected $_models = NULL;

	public function __construct()
	{
		$this->_models = new \StdClass;
	}

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

	static public function decode_namespace($model_name)
	{
		if (strpos($model_name, '\\') !== FALSE) // param-decoded model names with namespace
		{
			$model_name = str_replace('\\', '-', $model_name);
		}

		return $model_name;
	}
	
	public function build_models($model_name = FALSE, $type='normal')
	{
		$model_name = $this::decode_namespace($model_name);

		if ($model_name && !isset($this->_models->{$model_name}))
		{
			$model = Model::factory($model_name);
			$child_models = array();
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
						if (!isset($field->select_type))
						{
							$save_field->select_type = 'normal';
						}
						$save_field->model_name = $this::decode_namespace($field->foreign['model']);
						//TODO: костыль, придумать как сделать на будущее camelize системных значений
						$save_field->model_name = \inflector::camelize($save_field->model_name);

						$child_models[] = array('name'    => $field->foreign['model'],
						                        'select_type'	=> $save_field->select_type);
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

			$items = Helper_Dataview::clear_items($items);

			$model_class = $model->class_param();
			$model = new \StdClass;
			$model->fields = $fields;
			$model->items = $items;
			$model->model = $model_class;

			$this->_models->{$model_name} = $model;

			foreach ($child_models as $child_model)
			{
				$this->build_models($child_model['name'], $child_model['select_type']);
			}
		}

		return $this->_models;
	}

	/*

	$model = buildFields($this->model);
	$model->id = 'richGrid' . $this->block_id;
	$model->container = 'div#workspace';*/
}
