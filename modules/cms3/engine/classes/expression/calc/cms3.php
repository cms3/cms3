<?php

namespace CMS3\Engine;

use CMS3\Expression\Calc;

class Expression_Calc_CMS3 extends Calc implements Expression_Interface {

	public function __construct()
	{
		$this->operators = array
			(
				'=' 	=> '\CMS3\Expression\Operator_Equals',
				'<>' 	=> '\CMS3\Expression\Operator_NotEquals',
				'~' 	=> '\CMS3\Expression\Operator_RegExp',
				'NOT' 	=> '\CMS3\Expression\Operator_Not',
				'AND' 	=> '\CMS3\Expression\Operator_And',
				'OR'	=> '\CMS3\Expression\Operator_Or'
			);
	}
}