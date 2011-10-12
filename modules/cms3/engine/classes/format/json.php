<?php

namespace CMS3\Engine;

class Format_JSON extends Format {

	public $ext = '.json';
	
	public function convert($data)
	{
		return json_encode($data);
	}
}