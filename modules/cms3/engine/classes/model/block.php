<?php

namespace CMS3\Engine;

use CMS3\Engine\ORM;
 
class Model_Block extends Model {

	private $params_hash = NULL;

	public static function initialize(ORM_Meta $meta)
	{
		$meta->sorting(array('ordering' => 'ASC'));
		
		$meta->fields(array(
			'id' 		=> ORM::field('primary'),
			'position'	=> ORM::field('string'),
			'component'	=> ORM::field('string'),
			'action' 	=> ORM::field('string'),
			'condition'	=> ORM::field('belongsto'),
			'ordering'	=> ORM::field('integer'),
			'params'	=> ORM::field('hasmany',
				array(
					'foreign' => 'cms3\engine\block_param.block_id'
				)
			),
		));
	}
   
	public function get_params_hash()
	{
		if ($this->params_hash != NULL)
		{
			return $this->params_hash;
		}

		$this->params_hash = array();
		foreach ($this->params as $param)
		{
			$this->params_hash[$param->name] = $param->value;
		}
		return $this->params_hash;
	}
}
