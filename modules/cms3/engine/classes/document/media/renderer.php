<?php

namespace CMS3\Engine;

abstract class Document_Media_Renderer {

	protected $_media = NULL;

	public function __construct(Document_Media_Object $media)
	{
		$this->_media = $media;
	}
}