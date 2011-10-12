<?php

namespace CMS3\Expression;

class Engine {
	
	public $whitespace_chars = " \t";
	
	protected $calc;
	
	private $stack;
	
	private $position;
	
	private $allowed_operators;
	
	private $expression;
	
	private $variables = array();
	
	public function __construct($calc)
	{
		$this->calc = $calc;
	}
	
	public function evaluate($expression, $variables = array())
	{
		$result = NULL;
	
		$this->expression = '(' . $expression . ')';
		$this->variables = $variables;
		
		$this->stack = array();
		$this->position = 0;
		
		$this->allowed_operators = $this->calc->get_allowed_operators();
		
		$element = $this->get_next_element();
		while ($element != NULL)
		{
			array_push($this->stack, $element);
			if ($element instanceof Token_CloseBrace)
			{
				for ($i = count($this->stack) - 2; $i >= 0; $i--)
				{
					if ($this->stack[$i] instanceof Token_OpenBrace)
					{
						$level_res = $this->calc_level($i + 1, count($this->stack) - 2);
						for ($j = 3; $j > 0; $j--){
							unset($this->stack[$i + $j]);
						}
						$this->stack[$i] = new Token_Value($level_res);
					}
				}
			}
			$element = $this->get_next_element();
		}
		
		return $this->stack[0]->value;
	}
	
	private function calc_level($from, $to)
	{
		$result = NULL;

		$index = $this->get_max_priotiry_operator_index($from, $to);
		while ($index > -1){
			$operator = $this->stack[$index]->operator;
			if ($operator->type == Operator::UNARY)
			{
				$param = $this->stack[$index + 1];
				$value = $operator->execute($param);
				$this->stack[$index + 1]->value = $value;
				unset($this->stack[$index]);
				$to--;
			}
			else
			{
				$param1 = $this->stack[$index - 1];
				$param2 = $this->stack[$index + 1];
				$value = $operator->execute($param1, $param2);
				$this->stack[$index + 1]->value = $value;
				unset($this->stack[$index]);
				unset($this->stack[$index - 1]);
				$to -= 2;
			}
			$this->stack = array_values($this->stack);
			$index = $this->get_max_priotiry_operator_index($from, $to);
		}
		
		return $this->stack[$from];
	}
	
	private function get_max_priotiry_operator_index($from, $to)
	{
		$index = -1;
		
		for ($i = $from; ($i <= $to) && ($i < count($this->stack)); $i++)
		{
			if ($this->stack[$i] instanceof Token_Operator)
			{
				if ($index == -1 || ($this->stack[$index]->operator->priority < $this->stack[$i]->operator->priority))
				{
					$index = $i;
				}
			}
		}
		return $index;
	}
	
	protected function get_next_element()
	{
		$this->skip_whitespaces();

		if ($this->is_end()) 
		{
			return NULL;
		}

		$string = substr($this->expression, $this->position);
		$element = NULL;
		
		if (Token_OpenBrace::detect($string))
		{
			$element = Token_OpenBrace::read($string);
		}
		
		elseif (Token_CloseBrace::detect($string))
		{
			$element = Token_CloseBrace::read($string);
		}
		
		elseif (Token_Integer::detect($string))
		{
			$element = Token_Integer::read($string);
		}
		
		elseif (Token_String::detect($string))
		{
			$element = Token_String::read($string);
		}
		
		elseif (Token_Operator::detect($string, $this->allowed_operators))
		{
			$element = Token_Operator::read($string, $this->allowed_operators);
			$class = $this->calc->get_operator($element->name);
			$element->operator = new $class();
		}
		
		elseif (Token_Variable::detect($string))
		{
			$element = Token_Variable::read($string);
			$element->value = isset($this->variables[$element->value]) ? $this->variables[$element->value] : NULL;
		}
		
		if ($element){
			$this->position += $element->offset;
		}
			
		return $element;
	}
	
	private function skip_whitespaces()
	{
		while (! $this->is_end() && strpos($this->whitespace_chars, $this->expression{$this->position}) !== FALSE)
		{
			$this->position++;
		}
	}
	
	private function is_end()
	{
		return ($this->position == strlen($this->expression));
	}
}
