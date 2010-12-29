<?php

namespace CMS3\Expression;

abstract class Operator_Binary {

	public $type = Operator::BINARY;
	
	public function execute($value1, $value2){}
}
