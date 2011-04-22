<?php

namespace CMS3\Content;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;

class Model_Item extends Model {

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
				'id'			=> new Engine\Field_Primary,
				'state'			=> new Engine\Field_Integer,
				'title'			=> new Engine\Field_String_Multilang,
				'text'			=> new Engine\Field_String_Multilang,
			));
   }
}
