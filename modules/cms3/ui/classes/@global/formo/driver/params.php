<?php

class Formo_Driver_Params extends Formo_Driver {
	
	protected $view = 'params';

	public function html()
	{
		foreach ((array)$this->val() as $name => $value)
		{
			$options = array($name => $value);
			$this->field->append(Formo::field($name, 'param', array('options' => $options)));
		}
	}
}
