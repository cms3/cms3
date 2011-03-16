<?php

namespace CMS3\Engine;
 
class Model_Builder_Editable extends ORM_Builder {

	public function load($key = NULL)
	{
		if ($this->_type === Database::SELECT && $key !== NULL)
		{
			return $this->where('id', '=', $key)
				->and_where('current', '=', 1)
				->limit(1)
				->execute();
		}

		return parent::load($key);
	}
}
