<?php
/**
 * Model for users for the Openid Module
 *
 * $Id: user.php 2008-09-25 17:28:07 BST Atomless $
 */
class Model_Openid_User extends ORM {

	// Relationships
	protected $has_many = array('user_identities', 'user_tokens');

	/**
	 * Insert a new user into the db.
	 *
	 * @param  string  username of new user (defaults to user->id)
	 * @return Model_User
	 */
	public function create($username = FALSE)
	{
		$this->created = time();
		$this->save();

		// username defaults to user->id
		$this->username = ($username === FALSE)
						? $this->id
						: $username;

		return $this->save();
	}

	/**
	 * Tests if a user already exists in the database by checking
	 * submitted data against any db fields you wish to be treated as unique.
	 *
	 * @param  array   array of key value pairs to check
	 * @return boolean
	 */
	public function exists($user_data_array)
	{
		$columns = $this->db->list_columns($this->table_name);

		foreach ($user_data_array as $column_name => $column_value)
		{
			if (in_array($column_name, $columns))
			{
				if ($this->db->where($column_name, $user_data_array[$column_name])->count_records($this->table_name) > 0)
				{
					return TRUE;
				}
			}
			else
			{
				throw new Kohana_Exception('openid.database.field_not_found', $this->table_name.' > '.$column_name);
			}
		}

		return FALSE;
	}

	/**
	 * Save a user identity.
	 *
	 * @param String   the claimed_id
	 * @param String   the display id - to be used for display purposes only! see Openid.php for more info.
	 * @param Array    associative array of optional attributes corresponding to db fields (that can be NULL).
	 * @return boolean TRUE on success and FALSE if failed to save new identity.
	 */
	public function add_identity($claimed_id, $display_id, $attributes = array())
	{
		if ( ! $this->loaded)
			throw new Kohana_Database_Exception('openid.user_model.notloaded');

		$user_identity = new Model_User_Identity;

		$user_identity->user_id = $this->id;

		$user_identity->claimed_id = $claimed_id;

		// The display_id is the id the user entered in the form and is the id you should display when needed.
		// The claimed_id will be the id used when performing future authentications, but the
		// user may not be familiar with it so it should not be displayed on their profile pages.
		// This is because the claimed_id be resolved during the discovery phase to something quite different
		// from the id the user entered.
		$user_identity->display_id = $display_id;

		foreach ($attributes as $key => $value)
		{
			$user_identity->$key = $value;
		}

		$user_identity->save();
	}

	/**
	 * Allows a model to be loaded by username by overloading the parent ORM unique_key method (used by find()).
	 *
	 * @param   String   valid openid
	 * @return  String
	 */
	public function unique_key($id)
	{
		if ( ! empty($id) AND is_string($id) AND ! ctype_digit($id))
		{
				return 'username';
		}

		return parent::unique_key($id);
	}

} // End Model