<?php

namespace CMS3\Expression;

class Operator_Not extends Operator_Unary {
	
	public $priority = 2;
	
	public function execute($value)
	{
		return ! ((string)$value != '');
	}
}
