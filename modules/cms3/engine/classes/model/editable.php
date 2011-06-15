<?php

namespace CMS3\Engine;

abstract class Model_Editable extends Model {
	
	public function id()
	{
		if ($this->_meta->primary_key())
		{
			return $this->get($this->_meta->primary_key());
		}
		return 'id';
	}
}
