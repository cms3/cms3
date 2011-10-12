<?php

namespace CMS3\Expression;

abstract class Operator_Unary {

	public $type = Operator_Unary::UNARY;
	
	public function execute($value){}
}
