<?php

namespace CMS3\Auth;

use CMS3\Engine;
use CMS3\Engine\Model;
use CMS3\Engine\ORM_Meta;
use CMS3\Engine\ORM;

class Model_Token extends Model {
	
	public static function initialize(ORM_Meta $meta)
	{
		$meta
			->table('auth_tokens')
			->fields(array(
				'id' 		=> new Engine\Field_Primary,
				'user' 		=> new Engine\Field_BelongsTo(array(
					'foreign'	=> 'user.id',
					'column'	=> 'user_id', 
				)),
				//'user_id'	=> new Engine\Field_Integer,
				'token'		=> new Engine\Field_String(array(
					// TODO: uncomment this
					//'unique'	=> TRUE,
					'rules'		=> array(
						'max_length' => array(32),
						'min_length' => array(32)
					)
				)),
				'created' => new Engine\Field_Timestamp(array(
					//'auto_now_create' => TRUE,
				)),
				'expires' => new Engine\Field_Timestamp,
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