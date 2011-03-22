<?php

namespace CMS3\Gallery;

use CMS3\Engine\Controller_Component;
use CMS3\Engine\Request;

class Controller extends Controller_Component {
  
  public function action_display($params = array())
  {
    echo "Фотогалерея";
  }
  
  public function action_test($params = array())
  {
    
  }

  public function action_display_product_images($params = array())
  {
	$product_id = empty($params["product_id"]) ? Request::current()->param("shop_product_id") : intval($params["product_id"]);
    if ($product_id)
    {
		echo "Фотогалерея товара $product_id";
    }
  }
  
  public function action_clear_cache()
	{
		\Cache::instance()->delete_all();
		echo "cache has been deleted";
	}
}
