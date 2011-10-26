<?php

namespace CMS3\Engine;

class Document_Format_JSON extends Document {

	public $mime = 'application/json';

	public function render($template = 'index')
	{
		parent::render();
	}
}