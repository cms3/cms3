<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Handles enumerated lists.
 *
 * A choices property is required, which is an array of valid options. If you
 * attempt to set a value that isn't a valid choice, the default will be used.
 *
 * @package    Jelly
 * @author     Jonathan Geiger
 * @copyright  (c) 2010-2011 Jonathan Geiger
 * @license    http://www.opensource.org/licenses/isc-license.txt
 */
abstract class Jelly_Core_Field_Enum extends Jelly_Field_String {

	/**
	 * @var array An array of valid choices
	 */
	public $choices = array();

	/**
	 * Ensures there is a choices array set.
	 *
	 * @param  array  $options
	 */
	public function __construct($options = array())
	{
		parent::__construct($options);

		// Ensure we have choices to gather values from
		if (empty($this->choices))
		{
			throw new Kohana_Exception(':class must have a `choices` property set', array(
				':class' => get_class($this)));
		}

		// Set allow_null to TRUE if we find a NULL value
		if (in_array(NULL, $this->choices))
		{
			$this->allow_null = TRUE;
		}
		// We're allowing NULLs but the value isn't set. Create it so validation won't fail.
		elseif ($this->allow_null)
		{
			array_unshift($this->choices, NULL);
		}

		reset($this->choices);

		// Convert non-associative values to associative ones
		if ( ! Arr::is_assoc($this->choices))
		{
			$this->choices = array_combine($this->choices, $this->choices);
		}

		// Set the default value from the first choice in the array
		if ( ! array_key_exists('default', $options))
		{
			$this->default = key($this->choices);

			// Check if the associated key's value is NULL
			if ($this->choices[$this->default] === NULL)
			{
				// Set the default to NULL instead of using the key which is an empty string for NULL values
				$this->default = NULL;
			}
		}

		// Add a rule to validate that the value is proper
		$this->rules[] = array('array_key_exists', array(':value', $this->choices));
	}

} // End Jelly_Core_Field_Enum