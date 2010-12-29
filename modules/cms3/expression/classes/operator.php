<?php

namespace CMS3\Expression;

abstract class Operator {

	const UNARY = 1;
	const BINARY = 2;
	
	public $type;
	public $symbol;
	public $priority;
}
