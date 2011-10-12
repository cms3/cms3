<?php

namespace CMS3\Engine;

class Field_String_Multilang extends Field_String implements \Jelly_Field_Supports_Save
{
	const SUFFIX = '_i18n';
	
	public $in_db = FALSE;
	
	public $language_column = 'language';
	
	public $table = NULL;
	
	public $foreign_column = NULL; 
	
	public function initialize($model, $column)
	{
		if (empty($this->table))
		{
			$this->table = ORM::meta($model)->table() . static::SUFFIX;
		}
		if (empty($this->foreign_column))
		{
			$this->foreign_column = ORM::meta($model)->foreign_key();
		}
		
		parent::initialize($model, $column);
	}
	
	public function get($model, $value)
	{
		if (App::instance()->get_cfg('multilingual'))
		{
			$obj = ORM::query($this->table)
				->where($this->foreign_column, '=', $model->id())
				->where($this->language_column, '=', strtolower($model->language))
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
