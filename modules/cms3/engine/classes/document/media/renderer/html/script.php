<?php

namespace CMS3\Engine;

class Document_Media_Renderer_HTML_Script extends Document_Media_Renderer_HTML implements Document_Media_Renderer_Interface {

	public function render_link()
	{
		$attrs = array_merge($this->_attrs(), array(
			'src' => $this->_media->url
		));
		
		return HTML::tag('script', '', $attrs, TRUE);
	}
	
	public function render_content()
	{
		$content = "\n" . $this->_media->content . "\n";
	
		return HTML::tag('script', $content, $this->_attrs(), TRUE);
	}
	
	protected function _attrs()
	{
		$params = array_merge($this->_media->params, array(
			'type' => @$this->_media->params['type'] ?: 'text/javascript'
		)); 		
	
		return $this->_clean_attrs($params, array('defer'));
	}
}