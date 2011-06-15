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
	
	public static function factory($model = NULL, $key = NULL)
	{
		if ($model === NULL)
		{
			$model = get_called_class(); 
		}
		elseif (! NS::have_namespace($model))
		{
			$namespace = NS::extract_namespace(get_called_class());
			$model = NS::add_namespace($model, $namespace);
		}
		
		return ORM::factory($model, $key);
	}
	
	public function query($key = NULL)
	{
		return ORM::query($this, $key);
	} 
	
	public function get_resource_id()
	{
		return ORM::model_name($this);
	}
}
