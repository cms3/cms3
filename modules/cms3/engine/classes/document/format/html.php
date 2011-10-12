<?php

namespace CMS3\Engine;

class Document_Format_HTML extends Document {

	public $mime = 'text/html';

	public $direction = 'ltr';

	public $charset = 'utf-8';
	
	public $scripts_in_header = TRUE;
	
	protected function _set_headers()
	{
		parent::_set_headers();
		
		$this->headers['meta'][] = array(
			'http-equiv'	=> 'Content-Type',
			'content'		=> $this->mime . '; charset=' . $this->charset,
		);
	}
	
	public function display_header()
	{
		$output = $this->display_title() . $this->display_meta() . $this->display_stylesheets();
		if ($this->scripts_in_header)
		{
			$output .= $this->display_scripts();
		}
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
		$output = '';
		if (isset($this->headers['meta']) && is_array($this->headers['meta']))
		{
			foreach (@$this->headers['meta'] as $meta)
			{
				$output .= HTML::tag('meta', NULL, $meta);
			}
		}
		return $output;
	}
	
	public function display_stylesheets($position = 'default')
	{
		return $this->_display_media('style', $position);
	}
	
	public function display_scripts($position = 'default')
	{
		return $this->_display_media('script', $position);
	}
}