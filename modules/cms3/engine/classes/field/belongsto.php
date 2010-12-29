<?php

namespace CMS3\Engine;

class Field_BelongsTo extends \Jelly_Field_BelongsTo
{
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
		
		if (($namespace = NS::extract_namespace($model)) && ! NS::have_namespace($this->foreign['model']))
		{
			$this->foreign['model'] = NS::add_namespace($this->foreign['model'], $namespace);
		}
	}
}
