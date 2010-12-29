<?php defined('SYSPATH') OR die('No direct access allowed.');
 
class CMS3_Model_Auth_Token extends Auth_Model {
	
	public static function initialize(Jelly_Meta $meta)
	{
		$meta
			->table('auth_tokens')
			->fields(array(
				'id' 		=> new Field_Primary,
				'user' 		=> new Field_BelongsTo(array(
					'foreign'	=> 'user.id',
					'column'	=> 'user_id', 
				)),
				//'user_id'	=> new Field_Integer,
				'token'		=> new Field_String(array(
					'unique'	=> TRUE,
					'rules'		=> array(
						'max_length' => array(32),
						'min_length' => array(32)
					)
				)),
				'created' => new Field_Timestamp(array(
					//'auto_now_create' => TRUE,
				)),
				'expires' => new Field_Timestamp,
			));
			
			/*
			if (mt_rand(1, 100) === 1)
			{
				Jelly::delete('auth_token')->where('expires', '<', time())->execute();
			}
			*/
   }
   
	public function create($user_id, $lifetime = 1209600)
	{		
		$this->token = $this->generate_token();
		$this->user = Jelly::select('user', $user_id); // TODO
		$this->expires = time() + $lifetime;
		
		return parent::save();
	}
	
	public function update()
	{
		$this->token = $this->generate_token();
		
		return parent::save();
	}
	
	protected function generate_token()
	{
		return text::random('alnum', 32);
	}
}