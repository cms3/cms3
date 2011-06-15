<?php

namespace CMS3\Engine;

class Document_HTML extends Document {

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
	
	public function display_stylesheets()
	{
		$output = '';
		if (isset($this->headers['stylesheet']) && is_array($this->headers['stylesheet']))
		{
			foreach ($this->media['stylesheet'] as $sheet)
			{
				$attrs = array(
					'type' => $sheet['type']
				);
				if (@$sheet['media'] != NULL)
				{
					$attrs['media'] = $sheet['media']; 
				}
				if (@$sheet['charset'] != NULL)
				{
					$attrs['charset'] = $sheet;
				}
				if (@$sheet['link'] != NULL)
				{
					$attrs['href'] = $sheet['link'];
					$attrs['rel'] = 'stylesheet';
					$output .= HTML::tag('link', NULL, $attrs, FALSE);
				}
				else
				{
					$content = @$sheet['content'];
					if ($content != NULL)
					{
						$content = "\n" . $content . "\n";
					}
					$output .= HTML::tag('style', $content, $attrs, TRUE);
				}
			}
		}
		return $output;
	}
	
	public function display_scripts()
	{
		$output = '';
		if (isset($this->headers['script']) && is_array($this->headers['script']))
		{
			foreach ($this->media['script'] as $script)
			{
				$attrs = array(
					'type' => $script['type']
				);
				if (@$script['link'] != NULL)
				{
					$attrs['src'] = $script['link'];
					$content = NULL;
				}
				else
				{
					$content = @$script['content'];
				}
				if (@$script['defer'] == TRUE)
				{
					$attrs['defer'] = 'defer';
				}
				if (@$script['charset'] != NULL)
				{
					$attrs['charset'] = $charset;
				}
				if ($content != NULL)
				{
					$content = "\n" . trim($content, "\n") . "\n";
				}
				$output .= HTML::tag('script', $content, $attrs, TRUE);
			}
		}
		return $output;
	}
	
	public function add_script($src = NULL, $content = NULL, $type = 'text/javascript', $defer = FALSE, $charset = NULL)
	{
		$params = array(
			'type'		=> $type,
			'defer'		=> $defer,
			'charset'	=> $charset,
		);
		
		$this->add_media('script', $src, $content, $params);
	}
	
	public function add_stylesheet($href = NULL, $content = NULL, $type = 'text/css', $media = NULL, $charset = NULL)
	{
		$params = array(
			'type'		=> $type,
			'media'		=> $media,
			'charset'	=> $charset,
		);
		$this->add_media('stylesheet', $href, $content, $params);
	}
}