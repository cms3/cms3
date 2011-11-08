<?php

namespace CMS3\Files;

use CMS3\Engine\Model;
use CMS3\Engine\ORM;
use CMS3\Engine\ORM_Meta;

class Model_Image extends Model
{
	protected $_config = NULL;

	protected $_resize_params = array(
		'width'  => 0,
		'height' => 0,
		'zoom'   => 100,
		'crop'   => FALSE
	);

	public function resize_params($params)
	{
		if ($params != NULL)
		{
			$this->_resize_params = $params;
		}

		return $this->_resize_params;
	}

	public static function initialize(ORM_Meta $meta)
	{
		$meta->fields(array(
			'id'	=> ORM::field('primary'),
			'title'	=> ORM::field('string', array(
				'multilang' => TRUE
			)),
			'description'	=> ORM::field('text', array(
				'multilang' => TRUE
			)),
			'file'      => ORM::field('belongsto'),
			'url'       => ORM::field('string'),
			'width'  	=> ORM::field('integer'),
			'height'  	=> ORM::field('integer'),
		));
	}

	public function __construct($key = NULL)
	{
		$this->_config = \CMS3::$config->load('cms3\image');
		$this->_resize_method = $this->_config['resize_method'];

		return parent::__construct($key);
	}

	public function thumbnail($width, $height, $resize_method = NULL)
	{
		$orig_file = $this->file->filename();
		if (! $orig_file)
		{
			return NULL;
		}

		if ($resize_method !== NULL)
		{
			$this->_resize_method = $resize_method;
		}

		$thumb_file = $this->_thumbnail_filename($orig_file, $width, $height);
		if (! is_file($thumb_file))
		{
			$dir = dirname($thumb_file);
			if (! is_dir($dir))
			{
				mkdir($dir, NULL, TRUE);
			}
			$image = \Image::factory($orig_file);
			$image->resize($width, $height, $this->_resize_method);
			$image->save($thumb_file);

			if (! is_file($thumb_file))
			{
				$thumb_file = NULL;
			}
		}

		return $thumb_file;
	}

	protected function _thumbnail_filename($filename, $width, $height)
	{
		$thumbs_dir = $this->_config['thumbs_dir'];

		$pathinfo = pathinfo($filename);

		$suffix = '_' . (int)$this->_params_key();
		$ext = ($pathinfo['extension'] ? '.' : '') . $pathinfo['extension'];
		
		$thumb = $thumbs_dir . DIRECTORY_SEPARATOR . $pathinfo['filename'] . $suffix . $ext;
		
		return $thumb;
	}

	protected function _params_key()
	{
		$checksum = crc32(serialize($this->_params));

		return sprintf('%u', $checksum);
	}
}
