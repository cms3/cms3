<?php

namespace CMS3\UI;

use CMS3\Engine\App;
use CMS3\Engine\Document_HTML;
use CMS3\Engine\Exception;
use CMS3\Engine\NS;

class ExtJS extends Library {
	
	const EXT = '.js';
	
	public $path = '/modules/cms3/ui_extjs/media/js/'; // TODO: move to config

	private $_ready_script = array();
	
	protected $_included_files = array();
	
	public function __construct()
	{
		if (! App::instance()->document instanceof Document_HTML)
		{
			throw new Exception('Only HTML documents supported for ExtJS UI');
		}
	}

	public static function make_function($name = '', $vars = '', $code = '')
	{
		return 'function ' . $name . '(' . $vars . '){' . $code . '}';
	}

	public static function convert_var($var)
	{
		if (is_bool($var))
		{
			return $var ? 'true' : 'false';
		}
		else if (is_null($var))
		{
			return '""';
		}
		else if (is_string($var))
		{
			return '"' . $var . '"';
		}
		else
		{
			return $var;
		}
	}
	
	public static function convert_object($object)
	{
		if (is_array($object))
		{
			$output = array();
			foreach ($object as $item)
			{
				$output[] = static::convert_object($item);
			}
			return '[' . implode(',', $output) . ']';
		}
		elseif (is_object($object))
		{
			if ($object instanceof ExtJS_Handler)
			{
				return $object;
			}
			$fields = get_object_vars($object);
			$output = array();
			foreach ($fields as $name => $value)
			{
				$output[] = $name . ':' . static::convert_object($value);
			}
			return '{' . implode(',', $output) . '}';
			
		}
		else
		{
			return static::convert_var($object);
		}
	}

	public function load()
	{
		$this->include_file('ext/bootstrap');
		App::instance()->document->add_stylesheet($this->path . 'ext/resources/css/ext-all.css');
		//$this->_add_code('Ext.Loader.setPath("Ext.cms3", ' . $this->path . 'cms3/");');
	}
	
	public function include_file($name)
	{
		if (! in_array($name, $this->_included_files))
		{
			$this->_included_files[] = $name;
			App::instance()->document->add_script($this->path . $name . self::EXT);
		}
	}
	
	protected function _add_code($line, $add_first = FALSE)
	{
		if ($add_first)
		{
			array_unshift($this->_ready_script, $line);
		}
		else
		{
			$this->_ready_script[] = $line;
		}
	}
	
	protected function _render()
	{
		$code = implode("\n", $this->_ready_script);
		
		App::instance()->document->add_script(NULL, $code);
	}
	
	public function control($name)
	{
		$class = NS::add_namespace('ExtJS_Control_' . ucfirst($name), '\CMS3\UI');
		
		return new $class();
	}
}