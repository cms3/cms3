<?php

namespace CMS3\Images;

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
		$meta->table('files__images'); // TODO: убрать эту хрень
		$meta->fields(array(
			'id'	=> ORM::field('primary'),
			'title'	=> ORM::field('string', array(
				'multilang' => TRUE
			)),
			'description'	=> ORM::field('text', array(
				'multilang' => TRUE
			)),
			'file'      => ORM::field('belongsto', array(
				'namespace' => 'cms3\files'
			)),
			'url'       => ORM::field('string'),
			'width'  	=> ORM::field('integer'),
			'height'  	=> ORM::field('integer'),
		));
	}

	public function __construct($key = NULL)
	{
		$this->_config = \CMS3::$config->load('cms3\images');
		$this->_config = array                                  // TODO: должно браться из конфига
			(
				'thumbs_dir' => APPPATH.'cache'.DIRECTORY_SEPARATOR.'thumbs',
				'resize_params' => array(
					'width'  => 0,
					'height' => 0,
					'zoom'   => 100,
					'crop'   => FALSE
				)
			);
		$this->_resize_params = $this->_config['resize_params'];

		return parent::__construct($key);
	}

	public function thumbnail(array $params = array(), $generate = TRUE)
	{
        if (is_string($params))
        {
            $params = $this->decode_params($params);
        }

		$orig_file = $this->file->filepath();

		$params = (array)$params + $this->_resize_params;
		$thumb_file = $this->_thumbnail_filename($orig_file, $params);

		$thumb = Thumbnail::factory($orig_file, $thumb_file, $params, $generate);

		return $thumb;
	}

    protected function _thumbnail_filename($filename, $params)
	{
		$thumbs_dir = $this->_config['thumbs_dir'];

		$pathinfo = pathinfo($filename);

		$format_dir = $this->encode_params($params);
		$ext = ($pathinfo['extension'] ? '.' : '') . $pathinfo['extension'];
		
		$thumb = $thumbs_dir . DIRECTORY_SEPARATOR . $format_dir . DIRECTORY_SEPARATOR . $pathinfo['filename'] . $ext;
		
		return $thumb;
	}

    public function encode_params($params)
	{
        $result = '';

        foreach (array_reverse($this->_resize_params) as $name => $value)
        {
            if (isset($params[$name]) && $params[$name] == $this->_resize_params[$name] && $result == '')
            {
                continue;
            }
            if ($result != '')
            {
                $result = '_' . $result;
            }
            $result = (isset($params[$name]) ? $params[$name] : '') . $result;
        }
        if ($result == '')
        {
            $result = 'def';
        }

		return $result;
	}

    public function decode_params($string)
    {
        $params = array();

        $parts = explode('_', $string);

        foreach ($this->_resize_params as $name => $value)
        {
            $part = array_shift($parts);
            $params[$name] = $part ?: $value;
        }

        return $params;
    }
}
