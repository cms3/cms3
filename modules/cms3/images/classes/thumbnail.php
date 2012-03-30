<?php

namespace CMS3\Images;

use CMS3\Engine\BaseClass;
use CMS3\Engine\URL;

class Thumbnail
{
	protected $_image;

	protected $_filename;

	protected $_driver;

	public $quality = 100;

	public static function factory($orig_file, $thumb_file, array $params = array())
	{
		$thumb = new static();

		$thumb->filename($thumb_file);

		if (! is_file($thumb_file))
		{
			$dir = dirname($thumb_file);
			if (! is_dir($dir))
			{
				mkdir($dir, NULL, TRUE);
			}

			$thumb->load($orig_file);
			$thumb->render($params);
			$thumb->save($thumb_file);
		}

		return $thumb;
	}

	public function __construct($driver = NULL)
	{
		if ($driver = NULL)
		{
			$driver = $this->_default_driver();
		}
		$this->_driver = $driver;
	}

	public function render($params)
	{
		$this->load();
		// TODO: реализовать различные виды ресайзинга

		$width = isset($params['width']) ? $params['width'] : NULL;
		$height = isset($params['height']) ? $params['height'] : NULL;

		if ($width || $height)
		{
			$this->_image->resize($width, $height);
		}
	}

	public function load($original = NULL)
	{
		if ($original === NULL && empty($this->_image) && ! empty($this->_filename))
		{
			$original = $this->_filename;
		}
		if ($original != NULL)
		{
			$this->_image = \Image::factory($original, $this->_driver);
		}
		return $this->_image;
	}

	public function save($filename)
	{
		$this->load();
		return $this->_image->save($filename, $this->quality);
	}

	public function display()
	{
		$this->load();
		if ($this->_image)
		{
			//return $this->_image->render(NULL, $this->quality);
            return readfile($this->filename());
		}
		return NULL;
	}

	public function filename($filename = NULL)
	{
		if ($filename !== NULL)
		{
			$this->_filename = $filename;
		}

		return $this->_filename;
	}

	public function url()
	{
		return URL::real_to_site($this->filename());
	}

	public function width()
	{
		$this->load();

		return $this->_image->width;
	}

	public function height()
	{
		$this->load();

		return $this->_image->height;
	}

	protected function _default_driver()
	{
		$result = NULL;

		if (extension_loaded('magickwand'))
		{
			$result = 'Imagick';
		}
		elseif (extension_loaded('gd'))
		{
			$result = 'GD';
		}

		return $result;
	}
}
