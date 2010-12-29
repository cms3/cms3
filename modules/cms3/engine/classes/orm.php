<?php

namespace CMS3\Engine;

class ORM extends \Jelly_Core {

	public static function class_name($model)
	{	
		if ($model instanceof Model)
		{
			return strtolower(get_class($model));
		}
		elseif (class_exists($model))
		{
			if (is_subclass_of($model, 'CMS3\Engine\Model'))
			{
				return strtolower($model);
			}
		}
		$class_name = NS::add_class_prefix($model, ORM::model_prefix());
			
		return strtolower($class_name);
	}
	
	public static function model_name($model)
	{
		if (is_object($model))
		{
			$model = get_class($model);
		}
		
		if ($namespace = NS::extract_namespace($model))
		{
			$model = NS::extract_class_name($model);
		}

		$prefix_length = strlen(ORM::model_prefix());

		// Compare the first parts of the names and chomp if they're the same
		if (strtolower(substr($model, 0, $prefix_length)) === strtolower(ORM::model_prefix()))
		{
			$model = substr($model, $prefix_length);
		}
		
		if ($namespace !== NULL)
		{
			$model = NS::add_namespace($model, $namespace);
		}

		return strtolower($model);
	}
}