<?php

namespace CMS3\Shop;

use CMS3\Engine;

class Component extends Engine\Component {

	public function explode_params($params)
 	{
		if (isset($params['shop_path']))
		{
			$parts = explode('/', $params['shop_path']);
			$params['shop_category_id'] = $parts[0];
			if (count($parts) > 1)
			{
				$params['shop_product_id'] = $parts[1];
			}
		}
		
		return $params;
	}
	
	public function implode_params($params)
 	{
		if (isset($params['shop_category_id']))
		{
			$params['shop_path'] = $params['shop_category_id'];
			if (isset($params['shop_product_id']))
			{
				$params['shop_path'] .= '/' . $params['shop_product_id'];
			}
		}
		
		return $params;
	}
}
