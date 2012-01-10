<?php

namespace CMS3\Pagination;

use CMS3\Engine\URL;

class Paginator {

	public $pages;
	
	public $next_link;
	
	public $prev_link;

	public function __construct($total, $limit, $offset, $model)
	{
		$this->pages = array();
		$this->prev_link = NULL;
		$this->next_link = NULL;
	
		if ($total == 0)
		{
			return;
		}
		if ($limit == 0)
		{
			$limit = $total;
		}
		
		$offset_param = 'offset[' . $model . ']';
		$limit_param = 'limit[' . $model . ']';
		
		$get = $_GET;
		unset($get[$offset_param]);
		unset($get[$limit_param]);
		unset($get[urlencode($offset_param)]);
		unset($get[urlencode($limit_param)]);
	
		$count = ceil($total / $limit);
		$active_no = floor($offset / $limit) + 1;
		
		for ($i = 1; $i <= $count; $i++)
		{
			$page = new \StdClass();
			
			$page->title = $i;
			$page->active = $active_no == $i;
			$params = array($offset_param => $limit * ($i - 1), $limit_param => $limit);
			$page->link = URL::query(array_merge($get, $params), FALSE);
			
			if ($i + 1 == $active_no)
			{
				$this->prev_link = $page->link;
			}
			if ($i - 1 == $active_no)
			{
				$this->next_link = $page->link;
			}
			
			$this->pages[] = $page;
		}
	}
	
	public function as_array()
	{
		return $this->_object_to_array($this);
	}
	
	private function _object_to_array($obj) // TODO: в общую библиотеку
	{
		$_arr = is_object($obj) ? get_object_vars($obj) : $obj;
		foreach ($_arr as $key => $val)
		{
			$val = (is_array($val) || is_object($val)) ? $this->_object_to_array($val) : $val;
			$arr[$key] = $val;
		}
		return $arr;
	}
}
