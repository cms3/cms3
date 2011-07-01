<?php

namespace CMS3\Engine;

class Field_String_Multilang extends Field_String implements \Jelly_Field_Supports_Save
{
	public $i18n_suffix = '_i18n';
	
	public $language_column = 'language';
	
	public $in_db = FALSE;
	
	public function get($model, $value)
	{
		if (App::instance()->get_cfg('multilingual'))
		{
			$language = strtolower($model->language);
			$table = ORM::meta($model)->table() . $this->i18n_suffix;
			$column = ORM::meta($model)->foreign_key();

			$obj = ORM::query($table)
				->where($column, '=', $model->id())
				->where($this->language_column, '=', $language)
				->limit(1)
				->select();
			
			return isset($obj[$this->column]) ? $obj[$this->column] : NULL;
		}
		else
		{
			return parent::get($model, $value);
		}
	}
	
	public function save($model, $value, $loaded)
	{
		if (App::instance()->get_cfg('multilingual'))
		{
			$language = strtolower($model->language);
			$table = ORM::meta($model)->table() . $this->i18n_suffix;
			$column = ORM::meta($model)->foreign_key();

			// TODO: делать только один запрос
			if ($this->get($model, $value) !== NULL)
			{
				ORM::query($table)
				    ->set(array(
				     	$this->column => $value
				    ))
				    ->where($column, '=', $model->id())
				    ->where($this->language_column, '=', $language)
				    ->update();
			}
			else {
				ORM::query($table)
					->columns(array(
						$this->language_column,
						$column,
						$this->column
					))
					->values(array(
						$language,
						$model->id(),
						$value
					))
				    ->insert();
			}
			return $value;
		}
		else
		{
			return parent::save($model, $value, $loaded);
		}
	}
}
