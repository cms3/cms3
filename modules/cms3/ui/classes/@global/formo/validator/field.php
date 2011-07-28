<?php

abstract class Formo_Validator_Field extends Formo_Core_Validator_Field {

	public function errors($file = NULL, $translate = TRUE)
	{
		if (! $this->_validation) return array();
	
		if ($file === NULL)
		{
			$file = $this->parent()->message_file();
		}

		$errors = $this->_validation->errors($file, $translate);
		$error = Arr::get($errors, $this->alias());

		return Arr::get($errors, $this->alias());
	}
}
