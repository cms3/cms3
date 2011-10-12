<?php
/**
 * Model for user_identities for the Openid Module
 *
 * $Id: identity.php 2008-09-25 17:28:07 BST Atomless $
 */
class Model_Openid_User_Identity extends ORM {

	// Relationships
	protected $belongs_to = array('user');

	/**
	 * Tests if a user_identity already exists in the database by checking
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
	 * Allows a model to be loaded by openid url (claimed_id) by overloading the parent ORM method.
	 *
	 * @param   string   valid openid
	 * @return  string
	 */
	public function unique_key($id)
	{
		if ( ! empty($id) AND is_string($id) AND ! ctype_digit($id))
		{
			return 'claimed_id';
		}

		return parent::unique_key($id);
	}

} // End Model