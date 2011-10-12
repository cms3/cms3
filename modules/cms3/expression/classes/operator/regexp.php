<?php

namespace CMS3\Expression;

class Operator_RegExp extends Operator_Binary {

	public $priority = 3;

	public function execute($value1, $value2)
	{
		return preg_match((string)$value2, (string)$value1);;
	}
}
