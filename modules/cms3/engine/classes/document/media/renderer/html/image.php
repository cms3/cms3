<?php

namespace CMS3\Engine;

class Document_Media_Renderer_HTML_Image extends Document_Media_Renderer_HTML implements Document_Media_Renderer_Interface {

	public function render_link()
	{
		$attrs = array_merge($this->_attrs(), array(
			'src'	=> $this->_media->url,
			'alt'	=> @$this->_media->params['alt'],
		));
		
		return HTML::tag('img', '', $attrs, TRUE);
	}
	
	public function render_content()
	{
		throw new Exception('Can not render image as content');
	}
}
