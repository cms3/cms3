<?php

namespace CMS3\Engine;

class Field_String_Multilang extends Field_String implements \Jelly_Field_Supports_Save
{
	const SUFFIX = '_i18n';
	
	public $in_db = FALSE;
	
	public $language_column = 'language';
	
	public $table = NULL;
	
	public $foreign_column = NULL;
	
	public $language = NULL;
	
	public function initialize($model, $column)
	{
		if (App::instance()->get_cfg('multilingual'))
		{
			if (empty($this->table))
			{
				$this->table = ORM::meta($model)->table() . static::SUFFIX;
			}
			if (empty($this->foreign_column))
			{
				$this->foreign_column = ORM::meta($model)->foreign_key();
			}
			if (empty($this->language))
			{
				$this->language = ORM::meta($model)->language();
			}
			$this->column = $column;
		}
		
		parent::initialize($model, $column);
	}
	
	public function get($model, $value)
	{
		if (App::instance()->get_cfg('multilingual'))
		{
			$obj = ORM::query($this->table)
				->where($this->table . '.' . $this->foreign_column, '=', $model->id())
				->where($this->table . '.' . $this->language_column, '=', strtolower($this->language))
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
			$column = ORM::meta($model)->foreign_key();

			// TODO: делать только один запрос
			if ($this->get($model, $value) !== NULL)
			{
				ORM::query($this->table)
				    ->set(array(
				     	$this->column => $value
				    ))
				    ->where($this->table . '.' . $column, '=', $model->id())
				    ->where($this->table . '.' . $this->language_column, '=', strtolower($this->language))
				    ->update();
			}
			else {
				ORM::query($this->table)
					->columns(array(
						$this->language_column,
						$column,
						$this->column
					))
					->values(array(
						strtolower($this->language),
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

	public function join($builder, $alias = NULL)
	{
		if (! empty($alias))
		{
			$join_alias = $builder->make_alias($alias, static::SUFFIX);
		}
		else
		{
			$join_alias = $this->table;
		}
		if (App::instance()->get_cfg('multilingual'))
		{
			$lang = strtolower($this->language);

			$builder->join(array($this->table, $join_alias))
				->on($join_alias . '.' . $this->foreign_column, '=', ORM::meta($this->model)->primary_key())
				->on($join_alias . '.' . $this->language_column, '=', DB::expr(\Database::instance()->quote($lang)));
		}
		return $join_alias;
	}

	public function add_filter($value, $builder, $alias = NULL)
	{
		$join_alias = $this->join($builder, $alias);
		$table = $join_alias ? ($join_alias . '.') : '';
		$builder->where($join_alias . '.' . $this->column, '=', $value);
	}
}
