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
		$users = CMS3\Auth\Model::factory('cms3\auth\user')->query()
			->where('enabled', '=', 1)
			->select();
		
		foreach ($users as $user)
		{
			$this->_acl_core->add_role($user);
		}
		
		$roles = Model_Role::factory()->query()
			->select();
		
		foreach ($roles as $role)
		{
			$this->_acl_core->add_role($role, $role->parent);
		}
		
		$rules = Model_Rule::factory()->query()
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