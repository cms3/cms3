<?php

namespace CMS3\Shop;

use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;

class Model_Product extends Model {

	public $image_params = array( // TODO
		'width' => 150,
		'height' => 120
	);

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'  => ORM::field('primary'),
			'type' => ORM::field('belongsto', array(
				'foreign' => 'product_type'
			)),
			'discontinued' => ORM::field('boolean'),
			'in_stock' => ORM::field('integer'),
			'ordering' => ORM::field('integer'),
			'article' => ORM::field('string'),
			'title' => ORM::field('string', array(
				'multilang' => TRUE
			)),
			'short_description' => ORM::field('text', array(
				'multilang' => TRUE
			)),
			'properties' => ORM::field('hasone', array(
				'foreign' => 'cms3\nbshop\property'
			)),
			'description' => ORM::field('text', array(
				'multilang' => TRUE
			)),
			'price' => ORM::field('hasone', array(
				'foreign' => 'cms3\shop\product_price'
			)),
			'images' => ORM::field('manytomany', array(
				'foreign' => 'cms3\images\image'
			))
		));
	}

	public function _default_image()
	{
		$result = NULL;

		if (count($this->images))
		{
			$thumb = $this->images[0]->thumbnail($this->image_params);
			$result['thumbnail'] = array(
				'width' => $thumb->width(),
				'height' =>  $thumb->height(),
				'url' => $thumb->url()
			);
		}

		return $result;
	}

	public function virtual_fields()
	{
		return array(
			//'default_image' => $this->_default_image(),
			'vendor' => $this->properties->vendor->as_array()
		);
	}
}