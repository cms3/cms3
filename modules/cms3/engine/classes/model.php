<?php

namespace CMS3\Engine;

class Model extends \Jelly_Model implements \Acl_Resource_Interface {

	public $language;
	
	public function __construct($values = array())
	{
		parent::__construct($values);
		$this->language = App::instance()->language;
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
