<?php

namespace CMS3\Engine;
 
abstract class Renderer implements Renderer_Interface {

	const CLASS_PREFIX = 'Renderer_';

	public static function display($name, array $params = array())
	{
		if (NS::extract_namespace($name) === NULL)
		{
			$class = NS::add_namespace(ucfirst($name), __NAMESPACE__);
		}
		else
		{
			$class = $name;
		}
		$class = NS::add_class_prefix($class, self::CLASS_PREFIX);
		
		if (class_exists($class))
		{
			$renderer = new $class();
			if ($renderer instanceof self)
			{
				return $renderer->render(@$params['name'], $params);
			}
		}
		throw new Exception('Unable to load renderer class :class', array(':class' => $class));
	}
}
