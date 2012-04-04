<?php

namespace CMS3\Shop;

use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\Request;
use CMS3\Engine\View;
use CMS3\Pagination\Paginator;

class Controller extends Abstract_Controller {
  
	public function action_display($params = array())
	{
		$params = $_REQUEST; // Request::$initial->param(); // TODO: автоматически

		if (isset($params["shop/product/id"]))
		{
			$this->action_display_product($params);
		}
		elseif (isset($params["shop/product/type/id"]))
		{
			$this->action_display_catalog($params);
		}
		else
		{
			$this->action_display_main($params);
		}
	}

	public function action_display_catalog($params = array())
	{
		$model = Model_Product::factory();
		$model->meta()->default_limit(32);

		$builder = $model->query()
			->filter()
			->order_by('type');
			
		$total = $builder->count();
		$builder->pagination();

		$paginator = new Paginator($total, $builder->current_limit(), $builder->current_offset(), 'shop/product');
		
		$products = $builder->select_all()->as_array();
		
		$type = Model_Product_Type::factory()
			->query($params["shop/product/type/id"])
			->limit(1)
			->select();

		$paginator_data = $paginator->as_array();

		if (\CMS3::$profiling === TRUE)
		{
			$benchmark = \Profiler::start(get_class($this), __FUNCTION__);
		}

        foreach ($products as &$product)
        {
            // TODO !
            if (count($product['images']))
            {
                $img = $product['images'][0];
                $product['default_image']['thumbnail']['url'] = '/?controller=cms3/images&action=thumbnail&width=150&height=120&image=' . $img['file']['dir'] . '/' . $img['file']['filename'];
            }
        }

		$view_data = array(
			'title' => @$type->title,
			'products' => $products,
			'pagination' => $paginator_data
		);

		if (isset($benchmark))
		{
			\Profiler::stop($benchmark);
		}

		echo View::factory('cms3\shop\catalog', $view_data);
	}
	
	public function action_display_main($params = array())
	{
        $product_count = isset($params['product_count']) ? $params['product_count'] : 32;

		$products = Model_Product::factory()
			->query()
			->filter()
			->order_by(\DB::expr('rand()'))
			->limit($product_count)
			->select_all();

		if (isset($benchmark))
		{
			\Profiler::stop($benchmark);
		}

		if (\CMS3::$profiling === TRUE)
		{
			$benchmark = \Profiler::start(get_class($this), __FUNCTION__ . '[as_array]');
		}


		
		$products_arr = $products->as_array();
			
		usort($products_arr, function($a, $b)
		{
			return $a['type']['id'] > $b['type']['id'];
		});
            /*
        foreach ($products as &$product)
        {
            // TODO !
            if (count($product['images']))
            {
                $img = $product['images'][0];
                $product['default_image']['thumbnail']['url'] = '/?controller=cms3/images&action=thumbnail&width=150&height=120&image=' . $img['file']['dir'] . '/' . $img['file']['filename'];
            }
        }
              */

        foreach ($products as $i => $product)
        {
            // TODO !
            if (count($product->images))
            {
                $img = $product->images[0];
                $products_arr[$i]['default_image']['thumbnail']['url'] = $img->thumbnail(array('width' => 150, 'height' => 120), FALSE)->url();
            }
        }

		$view_data = array(
			'title' => 'Новинки',
			'products' => $products_arr,
			'with_sections' => TRUE
		);

		if (\CMS3::$profiling === TRUE)
		{
			$benchmark = \Profiler::start(get_class($this), __FUNCTION__ . '[View::factory]');
		}

		echo View::factory('cms3\shop\catalog', $view_data);

		if (isset($benchmark))
		{
			\Profiler::stop($benchmark);
		}
	}
  
	public function action_display_product($params = array())
	{
		$product_id = empty($params["shop/product/id"]) ? 0 : intval($params["shop/product/id"]);

		$product = Model_Product::factory()
			->query($product_id)
			->limit(1)
			->select();

		if (! $product->loaded())
		{
			throw new \HTTP_Exception_404('Product :product_id not found.', array(
				':product_id' => $product_id,
			));
		}



		$product->image_params = array(
			'width' => 400,
			'height' => 500
		);

		$thumb_params = array(
			'width' => 100,
			'height' => 100
		);

		$product_arr = $product->as_array(NULL, TRUE, TRUE, 2);

        $product_arr['default_image'] = $product->_default_image();

		$product_arr['images'] = array();

		// TODO
		foreach ($product_arr['images'] as $i => $image)
		{
			$thumbnail = $product->images[$i]->thumbnail($product->image_params);
			$product_arr['images'][$i]['large'] = array(
				'url'       => $thumbnail->url(),
				'width'     => $thumbnail->width(),
				'height'    => $thumbnail->height()
			);

			$thumbnail = $product->images[$i]->thumbnail($thumb_params);
			$product_arr['images'][$i]['small'] = array(
				'url'       => $thumbnail->url(),
				'width'     => $thumbnail->width(),
				'height'    => $thumbnail->height()
			);
		}

		echo View::factory('cms3\shop\product', array( // TODO
			'product' => $product_arr
		));
	}

}
