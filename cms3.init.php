<?php defined('SYSPATH') or die('No direct script access.');

//-- Environment setup --------------------------------------------------------

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
//spl_autoload_register(array('Kohana', 'auto_load'));

spl_autoload_register(array('CMS3', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

//-- Configuration and initialization -----------------------------------------

/**
 * Set Kohana::$environment if $_ENV['KOHANA_ENV'] has been supplied.
 * 
 */
if (isset($_ENV['KOHANA_ENV']))
{
	Kohana::$environment = $_ENV['KOHANA_ENV'];
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init();

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Kohana_Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Kohana_Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
		 'database'   	=> MODPATH . 'database',   // Database access
		 'expression' 	=> MODPATH . 'expression',
		 'cms3\engine'  => MODPATH . 'cms3/engine',
		 'jelly'	  	=> MODPATH . 'jelly',
		 'acl'		  	=> MODPATH . 'acl',
	));
	
\CMS3\Engine\App::instance()->initialize();
	
/**
 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
 * If no source is specified, the URI will be automatically detected.
 */
 
if ( ! defined('SUPPRESS_REQUEST'))
{
	echo \CMS3\Engine\Request::instance()
		->execute()
		->send_headers()
		->response;
}