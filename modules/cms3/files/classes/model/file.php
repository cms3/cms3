<?php

namespace CMS3\Files;

use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;

class Model_File extends Model
{
	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'	=> ORM::field('primary'),
			'title'	=> ORM::field('string', array(
				'multilang' => TRUE
			)),
			'filename'	=> ORM::field('string'),
			'dir'	    => ORM::field('string'),
			'size'      => ORM::field('integer', array(
				'column' => '_size' // TODO: cache
			)),
			'mime'  	=> ORM::field('string'),
		));
	}
	
	public function filepath()
	{
		return DOCROOT . $this->dir . DIRECTORY_SEPARATOR . $this->filename;
	}

	public function virtual_fields()
	{
		$fields = array(
			'filepath'	=> $this->filepath()
		);

		return $fields;
	}
}
