<?php

namespace CMS3\Expression;

class Operator_Or extends Operator_Binary {

	public $priority = 1;

	public function execute($value1, $value2)
	{
		return (((string)$value1 != '') || ((string)$value2 != ''));
	}
}
