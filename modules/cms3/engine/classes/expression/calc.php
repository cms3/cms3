<?php

namespace CMS3\Engine;

class Expression_Calc extends \CMS3\Expression\Calc {

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