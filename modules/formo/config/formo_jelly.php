<?php defined('SYSPATH') or die('No direct script access.');

return array
(
	// Default drivers associated with Jelly Fields
	'drivers' => array
	(
		'default'          		 => 'text',
		'Field_Primary'    		 => 'text',
		'Field_String'     		 => 'text',
		'Field_String_Multilang' => 'text',
		'Field_Text'       		 => 'textarea',
		'Field_Text_Multilang'   => 'textarea',
		'Field_Password'   		 => 'password',
		'Field_Integer'    		 => 'text',
		'Field_Float'      		 => 'text',
		'Field_Enum'       		 => 'select',
		'Field_Boolean'    		 => 'bool',
		'Field_BelongsTo'  		 => 'select',
		'Field_HasOne'     		 => 'select',
		'Field_HasMany'    		 => 'checkboxes',
		'Field_ManyToMany' 		 => 'checkboxes',
		'Field_Param'   		 => 'param',
		'Field_Params'   		 => 'params',
	),
	// Rules to attach according to Jelly Field parameter values
	'auto_rules' => array
	(
		/* Example auto_rule
		'unique'	=> array
		(
			TRUE,
			array(':model::unique' => array(':alias');
		),
		*/
	),
	// The names of validation rules to pull from fields
	'validation_keys' => array
	(
		'rules'        => 'rules',
		'triggers'     => 'triggers',
		'filters'      => 'filters',
		'post_filters' => 'post_filters',
		
		/* Example of no-conflict with built-in Jelly vlaidation
		'rules'			=> 'formo_rules',
		'triggers'		=> 'formo_triggers',
		'rules'			=> 'formo_filters',
		'post_filters'	=> 'formo_post_filters',
		*/
	),
);