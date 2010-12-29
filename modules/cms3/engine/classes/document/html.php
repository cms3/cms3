<?php

namespace CMS3\Engine;

class Document_HTML extends Document {

	public $mime = 'text/html';
 
	public $language;
  
	public $direction = 'ltr';
  
	public $charset = 'utf-8';

	public $scripts = array();

	public $stylesheets = array();
	
	public function display_header()
	{
		$output = $this->display_title() . $this->display_meta();
		return $output;
	}
	
	public function display_title()
	{
		if (isset($this->headers['title']))
		{
			return HTML::tag('title', $this->headers['title']);
		}
		else 
		{
			return NULL;
		}
	}
	
	public function display_meta()
	{
		$output = "";
		if (isset($this->headers['meta']) && is_array($this->headers['meta']))
		{
			foreach ($this->headers['meta'] as $name => $content)
			{
				$output .= HTML::tag('meta', NULL, array(
					'name'		=> $name,
					'content'	=> $content,
				));
			}
		}
		return $output;
	}
}