<?php

namespace CMS3\Engine;
 
class Model_Block extends Model {

	private $params_hash = NULL;

	public static function initialize(ORM_Meta $meta)
	{
		$meta
			->sorting(array('ordering' => 'ASC'))
			->fields(array(
				'id' 			=> new Field_Primary,
				'position'		=> new Field_String,
				'component' 	=> new Field_String,
				'action' 		=> new Field_String,
				'condition'		=> new Field_BelongsTo,
				'ordering'		=> new Field_Integer,
				'params'		=> new Field_HasMany(array('foreign' => 'cms3\engine\block_param.block_id')),
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
