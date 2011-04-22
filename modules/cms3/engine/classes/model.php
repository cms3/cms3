<?php

namespace CMS3\Engine;

class Model extends \Jelly_Model implements \Acl_Resource_Interface {

	public $language;
	
	public function __construct($key = NULL)
	{
		$this->language = App::instance()->language;
		parent::__construct($key);
	}
	
	public function save($validation = FALSE)
	{
		return parent::save($validation);
	}
	
	public static function factory($model, $values = NULL)
	{
		return ORM::factory($model, $values);
	}
	
	public function get_resource_id()
	{
		return ORM::model_name($this);
	}
}
