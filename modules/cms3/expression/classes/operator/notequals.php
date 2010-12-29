<?php

namespace CMS3\Expression;

class Operator_NotEquals extends Operator_Binary {

	public $priority = 3;

	public function execute($value1, $value2)
	{
		return ((string)$value1 != (string)$value2);
	}
}
