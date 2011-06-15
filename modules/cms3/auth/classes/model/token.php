<?php

namespace CMS3\Auth;

use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\ORM;

class Model_Token extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta->table('auth_tokens'); // TODO
		
		$meta->fields(array(
			'id' 		=> ORM::field('primary'),
			'user' 		=> ORM::field('belongsto', array(
				'foreign'	=> 'user.id',
				'column'	=> 'user_id', 
			)),
			//'user_id'	=> ORM::field('integer'),
			'token'		=> ORM::field('string', array(
				// TODO: uncomment this
				//'unique'	=> TRUE,
				'rules'		=> array(
					'max_length' => array(32),
					'min_length' => array(32)
				)
			)),
			'created' => ORM::field('timestamp', array(
				//'auto_now_create' => TRUE,
			)),
			'expires' => ORM::field('timestamp'),
		));
		
		/*
		TODO: некрасиво
		if (mt_rand(1, 100) === 1)
		{
			ORM::delete('auth_token')->where('expires', '<', time())->execute();
		}
		*/
   }
   
	public function create($user_id, $expires = 54000)
	{		
		$this->token = $this->generate_token();
		$this->user = ORM::query('cms3\auth\user', $user_id)->limit(1)->select(); // TODO
		// TODO: set expires
		
		return parent::save();
	}
	
	public function update()
	{
		$this->token = $this->generate_token();
		
		return parent::save();
	}
	
	protected function generate_token()
	{
		return \Text::random('alnum', 32);
	}
}