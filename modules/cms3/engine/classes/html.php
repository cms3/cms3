<?php

namespace CMS3\Engine;

class HTML extends \HTML {

	public static function tag($name, $content = NULL, $attributes = array(), $pair = FALSE)
	{
		$tag = strtolower($name);
		$attrs = static::attributes($attributes);
		
		if ($content || $pair)
		{
			return '<' . $tag . $attrs . '>' . $content . '</' . $tag . '>';
		}
		else
		{
			return '<' . $tag . $attrs . '/>';
		}
	}
}