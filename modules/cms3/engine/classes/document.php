<?php

/**
 * Abstract document class
 * 
 * @package		CMS 3.0
 * @category	Engine
 */

namespace CMS3\Engine;

use CMS3\Template\Template;

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
	 * @var  array  List of media resources: scripts, stylesheets, etc.
	 */
	public $media = array();
	
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
		$class_name = NS::add_namespace('Document_' . ucfirst($format), 'CMS3\Engine');

		if (! class_exists($class_name))
		{
			throw new Exception('Unable to load document class for :format format', array(':format' => $format)); 
		}
		$document = new $class_name();
		$document->format = $format;
		
		return $document;
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
	  
		echo Template::render($template);
	}
	
	/**
	 * Add media data to the document
	 *
	 *     $document->add_media('script', '/foo/bar/script.js', NULL, array('defer' => true));
	 *      
	 * @param   string	$type		Allowed values: 'script', 'stylesheet'
	 * @param   string	$link		Link to external media resource. Must be null, if $content was set
	 * @param   string	$content	Content data for media. Must be null, if $link was set
	 * @param   array   $params		
	 * @return  void
	 */
	public function add_media($type, $link = NULL, $content = NULL, array $params = array())
	{
		$this->media[] = array_merge(
			array(
				'link' => $link,
				'content' => $content
			),
			$params
		);
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
}