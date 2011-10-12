<?php

namespace CMS3\Engine;

class Expression extends \CMS3\Expression\Engine {

	public function __construct()
	{
		$calc = new Expression_Calc();
		return parent::__construct($calc);
	}
	
	public function evaluate($expression, $variables = array())
	{
		return (parent::evaluate($expression, $variables) != '');
	}

}
