<?php

namespace CMS3\Acl;

use CMS3\Engine\Core;
use CMS3\Engine\ORM;

class Component extends \CMS3\Engine\Component {
	
	protected $_acl_core;
	
	public function __construct()
	{
		$this->_acl_core = new \Acl();
		$this->_load_acl();
	}
	
	protected function _load_acl()
	{
		$users = ORM::query('cms3\auth\user')
			->where('enabled', '=', 1)
			->select();
				
		foreach ($users as $user)
		{
			$this->_acl_core->add_role($user);
		}

		$roles = ORM::query('cms3\acl\role')->select();
		
		foreach ($roles as $role)
		{
			print_r($role->parent); exit;
			$this->_acl_core->add_role($role, $role->parent);
		}
		
		$rules = ORM::query('cms3\acl\rule')
			->where('enabled', '=', 1)
			->select();
			
		foreach ($rules as $rule)
		{
			$this->add_rule($rule->role, $rule->resource, $rule->privilege, $rule->allow);
		}
	}
	
	// TODO: add new rules at first by default and at last on _load_rules
	public function add_rule($role, $resource, $privilege, $allow)
	{
		if (! $this->_acl_core->has_resource($resource))
		{
			$this->_acl_core->add_resource($resource);
		}
		
		if ($allow)
		{
			$this->_acl_core->allow($role, $resource, $privilege, NULL);
		}
		else
		{
			$this->_acl_core->deny($role, $resource, $privilege, NULL);
		}
	}
	
	public function check($role, $resource, $privilege)
	{
		return $this->_acl_core->is_allowed($role, $resource, $privilege);
	} 
}