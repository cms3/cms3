<?php

namespace CMS3\Engine;

class Field_Params extends \Jelly_Field {

	public function set($value)
	{
		if (is_array($value))
		{
			// TODO: Убрать это отсюда в обработку при получении формы
			$array = array();
			foreach ($value as $key => $item)
			{
				$array[$item['name']] = $item['value'];
			}
			$value = $array;
			// END

			$value = @json_encode($value);
		}
	
		list($value, $return) = $this->_default($value);

		if ( ! $return)
		{
		 	if (($new_value = @json_decode($value)) !== FALSE)
			{
				$value = $new_value;
			}
		}

		return $value;
	}

	public function save($model, $value, $loaded)
	{
		if ($this->allow_null AND $value === NULL)
		{
			return NULL;
		}

		return @json_encode($value);
	}

}
