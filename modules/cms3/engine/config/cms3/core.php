<?php

return array
(
	'timezone'  				=> 'Europe/Kiev',
	'default_language'			=> 'ru_RU',
	'default_output_format'		=> 'html',
	'always_show_uri_language'	=> FALSE,
	'base_url'					=> '/',
	'index_file'				=> FALSE,
	'default_theme'				=> 'default',
	'default_caching_driver'	=> 'file',
	'cookie_salt'				=> 'c66ce72a464ad156ea1a728a15efb91b',
	'multilingual'				=> TRUE,
	
	'route_action'				=>	'action/<call_path>(/)(?<params>)',
	'route_default'				=>	'((<language>)(/)(<path>)(.<format>)(/)(?<params>))',

);
