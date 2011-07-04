<?php

namespace CMS3\Engine;

class Field_HasMany extends \Jelly_Field_HasMany
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
}
