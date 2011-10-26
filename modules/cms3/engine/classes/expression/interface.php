<?php

namespace CMS3\Engine;

interface Expression_Interface {
	
	public function evaluate($expression, $variables = array());
}