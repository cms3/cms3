<?php

namespace CMS3\Shop;

use CMS3\Engine\Controller_Component;

class Controller extends Controller_Component {
  
  public function action_display($params = array())
  {
    if ($product_id = $this->component->get_param("product_id"))
    {
			$params = array("product_id" => $product_id, "title" => "Страница товара");
			$this->display('product', $params);
    }
    elseif ($category_id = $this->component->get_param("category_id"))
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
    if (! empty($params["title"])){
			echo "<h4>" . $params["title"] . "</h4>";
		}
		$product_id = empty($params["product_id"]) ? 0 : intval($params["product_id"]);
		echo '<div><img src="/media/img/shop/' . $product_id  . '-big.jpg" /></div>';
		echo "product_id = $product_id";
  }
}