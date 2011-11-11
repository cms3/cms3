<?php

namespace CMS3\Engine;
 
class Model_Builder_Block extends ORM_Builder {

	public function by_position($position = "default")
	{
		return $this->where('position', '=', $position);
	}
}
