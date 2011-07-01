<?php

class Params extends Formo_Driver {

	public function html()
	{
		foreach ($this->field->get('options') => $param)
		{
			$this->field->append(Formo::field(NULL, 'param', $param));
		}
	}
}
