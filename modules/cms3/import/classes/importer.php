<?php

namespace CMS3\Import;

use CMS3\Shop\Model_Product_Type;
use CMS3\Menu\Model_Item;

class Importer {

	private $_create_categories;

	public function import_xml($filename, $create_categories = FALSE)
	{
		$this->_create_categories = $create_categories;

		$doc = new \DOMDocument('1.0');

		$doc->load($filename);

		foreach ($doc->firstChild->childNodes as $node)
		{
			if ($node->nodeName == 'categories')
			{
				$this->_process_categories($node);
			}
		}
	}

	public function _process_categories($node, $item_parent = NULL)
	{
		foreach ($node->childNodes as $node)
		{
			if ($node->nodeName == 'category')
			{
				$this->_process_category($node, $item_parent);
			}
		}
	}

	public function _process_category($node, $item_parent = NULL)
	{
		$type_id = NULL;

		if ($this->_create_categories)
		{
			if ($node->childNodes->length > 0)
			{
				if ($node->firstChild->nodeName == 'product')
				{
					$product_type = new Model_Product_Type();
					$product_type->title = $node->attributes->getNamedItem('title')->value;
					$product_type->save();

					$type_id = $product_type->id;
				}

				$item = new \CMS3\Menu\Model_Item();
				$item->menu = 6; // TODO
				$item->title = $node->attributes->getNamedItem('title')->value;
				if ($type_id != NULL)
				{
					$item->params = array(
						array(
							'name' => 'shop.product.type.id',
						    'value' => $type_id
						)
					);
				}
				$item->parent = $item_parent;
				$item->save();

				if ($node->firstChild->nodeName == 'categories')
				{
					$item_parent = $item->id;
				}
			}
		}
		foreach ($node->childNodes as $node)
		{
			if ($node->nodeName == 'categories')
			{
				$this->_process_categories($node, $item_parent);
			}
			elseif ($node->nodeName == 'product')
			{
				$this->_process_product($node, $type_id);
			}
		}
	}

	public function _process_product($node, $type_id = NULL, $name_hash = '')
	{
		$product = new \CMS3\Shop\Model_Product;
		$product->in_stock = $node->attributes->getNamedItem('in_stock')->value;
		$product->article = $node->attributes->getNamedItem('article')->value;
		$product->save();

		$properties = NULL;
		$images = array();

		foreach ($node->childNodes as $childNode)
		{
			if ($childNode->nodeName == 'price')
			{
				$price = \CMS3\Shop\Model_Product_Price::factory();
				$price->value = $childNode->attributes->getNamedItem('value')->value;
				$price->product = $product->id;
				$price->save();
			}
			elseif ($childNode->nodeName == 'property' || $childNode->nodeName == 'code_1c')
			{
				if ($properties == NULL)
				{
					$properties = \CMS3\NBShop\Model_Property::factory();
					$properties->product = $product->id;
				}

				if ($childNode->nodeName == 'code_1c')
				{
					$properties->code_1c = $childNode->textContent;
				}
				else
				{
					$name = $childNode->attributes->getNamedItem('name')->value;
					$value = $childNode->attributes->getNamedItem('value')->value;
					if ($name == 'vendor')
					{
						$vendor = \CMS3\NBShop\Model_Vendor::factory()
							->query()
							->where('title', '=', $value)
							->limit(1)
							->select();

						if (! $vendor->id)
						{
							$vendor->title = $value;
							$vendor->save();
						}
						
						$properties->vendor = $vendor->id;
					}
					else
					{
						$properties->{$name} = $value;
					}
				}
			}
			elseif ($childNode->nodeName == 'images')
			{
				foreach ($childNode->childNodes as $image_node)
				{
					if ($image_node->nodeName == 'image')
					{
						$file = \CMS3\Files\Model_File::factory();
						$file->mime = 'image/jpeg';
						$file->dir = 'files/images/orig';
						$file->filename = basename($image_node->attributes->getNamedItem('filename')->value);
						$fullname = DOCROOT . $file->dir . DIRECTORY_SEPARATOR . $file->filename;
						$file->size = filesize($fullname);
						$file->save();

						$image = \CMS3\Images\Model_Image::factory();
						$info = getimagesize($fullname);
						$image->width = $info[0];
						$image->height = $info[0];
						$image->file = $file->id;
						$image->save();


						$images[] = $image->id;
					}
				}
			}
			else
			{
				$product->{$childNode->nodeName} = $childNode->textContent;
			}
		}
		if ($properties != NULL)
		{
			$properties->save();
		}

		if ($type_id == NULL)
		{
		/*	$vendor = \CMS3\Shop\Model_Product_Type::factory()
				->query()
				->where('title', '=', $name_hash)
				->limit(1)
				->select();*/
		}
		$product->type = $type_id;

		$product->images = $images;
		$product->save();

		/*echo 1;
		exit;*/
	}
}

