<?php

namespace CMS3\Engine;

class Document_Media_Object {

	protected $_type = NULL;
	
	public $url = NULL;
	
	public $content = NULL;

	public $params = array();
	
	public static function factory($type)
	{
		return new static($type);
	}
	
	public function __construct($type)
	{
		$this->_type = $type;
	}
	
	protected function _renderer($format)
	{
		$renderer_class = 'CMS3\Engine\Document_Media_Renderer_' . $format . '_' . $this->_type;
		$renderer = new $renderer_class($this);

		return $renderer;
	}
	
	public function render($format = 'html')
	{
		$renderer = $this->_renderer($format);
		if (! ($renderer instanceof Document_Media_Renderer))
		{
			throw new Exception('Can not render media in :format format', array(
				':format' => $format
			));
		}
	
		if ($this->url != NULL)
		{
			return $renderer->render_link();
		}
		else
		{
			return $renderer->render_content();
		}
	}
}