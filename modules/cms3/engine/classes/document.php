<?php

/**
 * Abstract document class
 * 
 * @package     CMS 3.0
 * @subpackage	Engine
 * @author      CMS 3.0 Team
 * @copyright   (c) 2010-2011 CMS 3.0 Team
 * @license     http://cms3.org/license
 */

namespace CMS3\Engine;

abstract class Document {

	/**
	 * @var  string  Mime-type for current document. Must be filled in each class implemetation.
	 */
	public $mime = NULL;

	/**
	 * @var  string  Format for document content, like 'html' or 'xml'. Must be filled in each class implemetation.
	 */
	public $format = NULL;

	/**
	 * @var  array  List of document headers, like meta
	 */
	public $headers = array();
	
	/**
	 * @var  Document_Media object  Container with list of media resources: scripts, stylesheets, etc.
	 */
	public $media = NULL;
	
	/**
	 * Creates a new document object for specified format
	 *
	 *     $document = Document::factory('html');
	 *     $document is instance of Document_HTML
	 *     
	 * @param   string	$format
	 * @return  Document
	 */
	public static function factory($format)
	{
		$class_name = NS::add_namespace('Document_Format_' . ucfirst($format), 'CMS3\Engine');

		if (! class_exists($class_name))
		{
			throw new Exception('Unable to load document class for :format format', array(':format' => $format));
		}
		$document = new $class_name();
		$document->format = $format;
		
		return $document;
	}
	
	public function __construct()
	{
		$this->media = new Document_Media;
	}
	
	/**
	 * Renders some template with current document options and returns output
	 *
	 *     $output = $document->render('inner');
	 *      
	 * @param   string	$template
	 * @return  string
	 */
	public function render($template = 'index')
	{
		$this->_set_headers();
	  
		echo Template::display($template);
	}

	/**
	 * Load headers for current document from database
	 *
	 * @return  void
	 */
	protected function _set_headers()
	{
		$page_headers = Model::factory('pageheader')->query()->select();
		
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
	
	/**
	 * Return output for selected media type
	 *     
	 * @param   string	$type
	 * @param   string	$position
	 * @return  string
	 */
	protected function _display_media($type, $position = 'default')
	{
		$output = '';
		$list = $this->media->get($type, $position);

		foreach ($list as $media_obj)
		{
			$output .= $media_obj->render($this->format);
		}
		
		return $output;
	}
}
