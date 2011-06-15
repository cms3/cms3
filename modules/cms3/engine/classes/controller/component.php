<?php

namespace CMS3\Engine;

class Controller_Component extends Controller {
	
	public $component = NULL;
	
	public static function factory(Component $component, \Request $request = NULL, \Response $response = NULL)
	{
		$instance = new static($request, $response, $component);
		
		return $instance;
	}
	
	public function __construct(\Request $request = NULL, \Response $response = NULL, $component = NULL)
	{
		parent::__construct($request, $response);
		$this->component = $component; 
	}
}
