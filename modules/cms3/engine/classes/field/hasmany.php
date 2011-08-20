<?php

namespace CMS3\Engine;

class Field_HasMany extends \Jelly_Field_HasMany implements Field_Relationship_Interface
{
	public $namespace = NULL;
	
	/**
	 * Расширение родительской функции для корректной работы с пространствами имен
	 *
	 * @param   string  $model
	 * @param   string  $column
	 * @return  void
	 */
	public function initialize($model, $column)
	{
		parent::initialize($model, $column);
		
		if (! NS::have_namespace($this->foreign['model']))
		{
			if ($this->namespace != NULL)
			{
				$this->foreign['model'] = NS::add_namespace($this->foreign['model'], $this->namespace);
			}
			elseif ($namespace = NS::extract_namespace($model))
			{
				$this->foreign['model'] = NS::add_namespace($this->foreign['model'], $namespace);
			}
		}
	}

	public function add_filter($model, $value, $builder, $alias = NULL)
	{
		$meta = ORM::meta($this->model);
		$foreign_meta = ORM::meta($this->foreign['model']);
		
		$foreign_field = $foreign_meta->table() . '.' . $this->foreign['field'];

		$builder->join(array($foreign_meta->table(), $alias))
				->on($foreign_field, '=', $meta->table() . '.' . $meta->primary_key());

		return $this->foreign['model'];
	}
}
