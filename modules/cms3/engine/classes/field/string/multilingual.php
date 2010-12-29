<?php

namespace CMS3\Engine;

class Field_String_Multilingual extends Field_String
{
	public $suffix = '_i18n';
	
	public $language_column = 'language';
	
	public $in_db = FALSE; 

	public function get($model, $value)
	{
		$language = strtolower($model->language);
		$table = ORM::meta($model)->table() . $this->suffix;
		
		$obj = ORM::select($table)
				->where(ORM::meta($model)->primary_key(), '=', $model->id())
				->where($this->language_column, '=', $language)
				->limit(1)
				->execute();
		
		return isset($obj[$this->column]) ? $obj[$this->column] : NULL;
	}
}
