<?php

class Formo_Driver_Param extends Formo_Driver {

	protected $view = 'param';

	public function html()
	{
		foreach ($this->field->get('options') as $name => $data)
		{
			$prefix = $this->field->parent()->name() . '[' . $name  . ']';
			
			$this->field->set('name_field', Formo::field($prefix . '[name]', 'text', array(
				'value' => $name
			)));
			$this->field->set('value_field', Formo::field($prefix . '[value]', 'text', array(
				'value' => $data['value']
			)));
			break; // Only first element
		}
	}
}
