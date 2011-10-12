<?php

namespace CMS3\UI_Grid;

use CMS3\Engine\Model;
use CMS3\Engine\Exception;

class Model_Grid extends Model {
	
	protected $_source_model = NULL;
	
	protected $_source_data = NULL;
	
	public function source($model = NULL)
	{
		if ($model !== NULL)
		{
			if (! ($model instanceof Model))
			{
				$model = Model::factory($model);
			}
			$this->_source_model = $model;
		}
		
		return $this->_source_model;
	}
	
	public function load($data = NULL)
	{
		if (empty($this->_source_model))
		{
			throw new Exception('Source model can not be empty');
		}
	
		if ($data !== NULL)
		{
			$this->_source_data = $data;
		}
		elseif ($this->_source_data === NULL)
		{
			$this->_source_data = $this->_source_model
				->query()
				->filter()
				->select();
		}
		
		return $this->_source_data;
	}
	
	public static function initialize() {} // TODO: избавиться от этого
}