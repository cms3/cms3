<?php

namespace CMS3\Expression;

abstract class Calc {

	protected $operators = array();
	
	public function get_operator($symbol)
	{
		$symbol = strtoupper($symbol);
		foreach ($this->operators as $op_symbol => $op_class)
		{
			if (strtoupper($op_symbol) == $symbol)
			{
				return $op_class;
			}
		}
		return NULL;
	}
	
	public function get_allowed_operators()
	{
		return array_keys($this->operators);
	}
}