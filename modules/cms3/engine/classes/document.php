<?php

namespace CMS3\Engine;

abstract class Document {

	public $mime;

	public $format;

	public $tpl_engine;

	public $headers = array();

	public $current_theme;

	  public function render($template = "index")
	  {
		$this->_set_headers();
	  
		echo Template::render($template);
	  }

	public static function factory($format)
	{
		$class_name = NS::add_namespace('Document_' . $format, 'CMS3\Engine');

		if (! class_exists($class_name))
		{
			throw new Exception('Format :format doesn\'t supported', array(':format' => $format)); 
		}
		$document = new $class_name();
		$document->format = $format;
		
		return $document;
	}

	private function _set_headers()
	{
		$page_headers = ORM::select('cms3\engine\pageheader')->execute();
		
		foreach ($page_headers as $header)
		{
			if (App::check_page_condition($header->condition->condition))
			{
				if (! $header->attribute)
				{
					$this->headers[$header->tag] = $header->value;
				}
				else
				{
					$this->headers[$header->tag][$header->attribute] = $header->value;
				}
			}
		}
	}  
}