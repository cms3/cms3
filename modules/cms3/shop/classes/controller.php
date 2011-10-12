<?php

namespace CMS3\Shop;

use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\Request;
use CMS3\Engine\View;

class Controller extends Abstract_Controller {
  
  public function action_display($params = array())
  {
	$params = Request::$initial->param();
	$path = @$params['shop_path'];
	@list($params["category_id"], $params["product_id"]) = explode('/', $path);

    if ($product_id = @$params["product_id"])
    {
			$params = array("product_id" => $product_id, "title" => "Страница товара");
			$this->display('product', $params);
    }
    elseif ($category_id = @$params["category_id"])
    {
			$params = array("category_id" => $category_id, "title" => "Страница категории");
			$this->display('catalog', $params);
    }
    else
    {
			$params = array("title" => "Главная страница каталога");
			$this->display('catalog', $params);
    }
  }

  public function action_display_catalog($params = array())
  {
		echo View::factory('cms3\shop\catalog'); return;
  
		if (! empty($params["title"]))
		{
			echo "<h4>" . $params["title"] . "</h4>";
		}
		$category_id = empty($params["category_id"]) ? 0 : intval($params["category_id"]);
		$count = empty($params["count"]) ? 0 : intval($params["count"]);
		if ($category_id == 0)
		{
			echo '<a href="/shop/1/1"><b>Apple iPhone 3GS White 16 Гб</b><br /><br /><img src="/media/img/shop/1.jpg" /></a><br /><br /><br />';
			echo '<a href="/shop/2/9"><b>Canon EOS 450D EF-S 18-200 IS Kit</b><br /><br /><img src="/media/img/shop/9.jpg" /></a><br /><br /><br />';
			echo '<a href="/shop/3/17"><b>Lenovo ThinkPad SL500 614D426</b><br /><br /><img src="/media/img/shop/17.jpg" /></a><br /><br /><br />';
		}
		elseif ($category_id == 1)
		{
			echo '<a href="/shop/1/1"><b>Apple iPhone 3GS White 16 Гб</b><br /><br /><img src="/media/img/shop/1.jpg" /></a><br /><br /><br />';
		}
		elseif ($category_id == 2)
		{
			echo '<a href="/shop/2/9"><b>Canon EOS 450D EF-S 18-200 IS Kit</b><br /><br /><img src="/media/img/shop/9.jpg" /></a><br /><br /><br />';
		}
		elseif ($category_id == 3)
		{
			echo '<a href="/shop/3/17"><b></b><br /><br />Lenovo ThinkPad SL500 614D426<img src="/media/img/shop/17.jpg" /></a><br /><br /><br />';
		}
		echo "category_id = $category_id";
		if ($count)
		{
			echo ";  numer of products = $count";
		}
  }
  
	public function action_display_product($params = array())
	{
		$product_id = empty($params["product_id"]) ? 0 : intval($params["product_id"]);
		echo View::factory('cms3\shop\product', array( // TODO
			'title' => $params["title"],
			'product_id' => $product_id
		));
	}

}
