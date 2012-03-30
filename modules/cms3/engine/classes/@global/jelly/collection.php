<?php

class Jelly_Collection extends Jelly_Core_Collection {

	protected $_list;

	public function as_array($key = NULL, $value = NULL)
	{
		// TODO
		if ($key !== NULL || $value !== NULL)
		{
			return $this->_result->as_array($key, $value);
		}
		else
		{

			$result = array();
			foreach ($this as $item)
			{

				$node = array();
				$fields = $item->meta()->fields();
				if (\CMS3::$profiling === TRUE)
				{
					$benchmark_global = \Profiler::start(get_class($this), __FUNCTION__);
				}
				foreach ($fields as $name => $field)
				{
					if ($item->{$name} instanceof \CMS3\Engine\Model)
					{
						if (\CMS3::$profiling === TRUE)
						{
							$benchmark = \Profiler::start(get_class($this), __FUNCTION__ . '[Model as_array]');
						}

						$node[$name] = $item->{$name}->as_array(NULL, FALSE, TRUE, 1);

						if (isset($benchmark))
						{
							\Profiler::stop($benchmark);
						}
					}
					elseif ($item->{$name} instanceof \Jelly_Collection)
					{
						if (\CMS3::$profiling === TRUE)
						{
							$benchmark = \Profiler::start(get_class($this), __FUNCTION__ . '[Collection as_array]');
						}

						$node[$name] = $item->{$name}->as_array(NULL, NULL);

						if (isset($benchmark))
						{
							\Profiler::stop($benchmark);
						}
					}
					else
					{
						if (\CMS3::$profiling === TRUE)
						{
							$benchmark = \Profiler::start(get_class($this), __FUNCTION__ . '[$item->field_value]');
						}

						$node[$name] = $item->field_value($name);

						if (isset($benchmark))
						{
							\Profiler::stop($benchmark);
						}
					}
				}
				if (\CMS3::$profiling === TRUE)
				{
					$benchmark = \Profiler::start(get_class($this), __FUNCTION__ . '[$item->virtual_fields]');
				}
				
				$node = array_merge($node, $item->virtual_fields()); // TODO: нужно не всегда?

				if (isset($benchmark))
				{
					\Profiler::stop($benchmark);
				}
				if (isset($benchmark_global))
				{
					\Profiler::stop($benchmark_global);
				}

				$result[] = $node;
			}

			return $result;
		}
	}

	public function as_tree_array(array $fields = NULL, $recursive = TRUE, $add_virtual = TRUE)
	{
		$tree = array();
		foreach ($this as $name => $item)
		{
			if ($item instanceof \CMS3\Engine\Model)
			{
				$tree[] = $item->as_array($fields, $recursive, $add_virtual);
			}
			elseif (is_object($item))
			{
				$tree[] = get_class($item);
			}
			else
			{
				$tree[] = $item;
			}
		}
		return $tree;
	}

	public function build_tree($key = 'parent', $root_id = 0)
	{
		$this->_list = array();
		foreach ($this as $item)
		{
			$this->_list[] = $item;
		}

		return $this->_build_branch($key, $root_id);
	}

	protected function _build_branch($key, $parent_value)
	{
		$branch = array();

		foreach ($this->_list as $item)
		{
			if ($item instanceof \CMS3\Engine\Model)
			{
				$val = $item->field_value($key);

				if ($val == $parent_value)
				{
					$node = array();
					$fields = $item->meta()->fields();
					foreach ($fields as $name => $field)
					{
						if (! empty($field->tree))
						{
							$child_key = $field->foreign['field']; // TODO: expand alias!
							$value = $item->id(); // TODO

							$node[$name] = $this->_build_branch($child_key, $value);
						}
						else
						{
							$node[$name] = $item->field_value($name);
						}
					}
					$node = array_merge($node, $item->virtual_fields()); // TODO: нужно не всегда?
					$branch[] = $node;
				}
			}
		}

		return $branch;
	}
}
