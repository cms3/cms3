<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Handles image uploads and optionally refactors the original image and creates thumbnails of different sizes from the
 * uploaded image (as specified by the $thumbnails array).
 *
 * The original image can be refactored, just like the way each thumbnail is specified as an array with the following
 * properties: path, transformations and quality.
 *
 *
 * - path:             the only required property. It must point to a valid, writable directory.
 * - prefix:           a thumbnail-only property. If set the filename of the thumbnail will be prefixed with the value.
 * - transformations:  desired transformations to apply to the image (resize, crop, custom...)
 * - quality:          the desired quality of the saved image between 0 and 100.
 *
 * For example:
 *
 *     'thumbnails' => array (
 *         // 1st thumbnail
 *         array(
 *             'path' => 'upload/images/thumbs/',			  // where to save the thumbnails
 * 			   'prefix' => 'thumb_',						  // prefix for the thumbnail filename
 *             'transformations' => array(					  // define transformations, refer to the Image module methods
 *                 'resize' => array(500, 500, Image::AUTO),  // width, height, master dimension
 *                 'crop'   => array(100, 100, NULL, NULL),	  // width, height, offset_x, offset_y
 *             ),
 *             'quality' => 75,								  // desired quality of the saved image, default 100
 *         ),
 *         // 2nd thumbnail
 *         array(
 *             // ...
 *         ),
 *     )
 *
 * @package    Jelly
 * @author     Jonathan Geiger, Kelvin Luck, Miodrag Tokić
 * @copyright  (c) 2010-2011 Jonathan Geiger, Kelvin Luck
 * @license    http://www.opensource.org/licenses/isc-license.txt
 */
abstract class Jelly_Core_Field_Image extends Jelly_Field_File {

	/**
	 * @var  array  allowed file types
	 */
	public $types = array('jpg', 'gif', 'png', 'jpeg');

	/**
	 * @var  array  an array of transformation to apply to the image
	 */
	public $transformations = array();

	/**
	 * @var  int  image quality
	 */
	public $quality = 100;

	/**
	 * @var  string  image driver
	 */
	public $driver = NULL;

	/**
	 * @var  array  specifications for all of the thumbnails that should be automatically generated when a new image is uploaded
	 *
	 */
	public $thumbnails = array();

	/**
	 * Ensures there we have validation rules restricting file types to valid image filetypes and
	 * that the paths for any thumbnails exist and are writable.
	 *
	 * @param  array  $options
	 */
	public function __construct($options = array())
	{
		parent::__construct($options);

		// Check that all thumbnail directories are writable...
		foreach ($this->thumbnails as $key => $thumbnail)
		{
			if ( ! isset($thumbnail['quality']))
			{
				// Use default quality
				$thumbnail['quality'] = $this->quality;
			}

			if (isset($thumbnail['path']))
			{
				// Ensure the path is normalized and writable if set
				$thumbnail['path'] = $this->_check_path($thumbnail['path']);
			}

			if ( ! isset($thumbnail['prefix']))
			{
				// Force the thumbnail prefix to NULL if not set
				$thumbnail['prefix'] = NULL;
			}

			if ( ! isset($thumbnail['transformations']))
			{
				// Create an empty array for thumbnail tranformations if not set
				$thumbnail['transformations'] = array();
			}

			if ( ! $thumbnail['prefix'] AND ( ! isset($thumbnail['path']) OR $thumbnail['path'] === $this->path))
			{
				// If no prefix is set and the thumbnail path is the same as the original path throw exception
				throw new Kohana_Exception(':class must have a different `path` or a defined `prefix` property for thumbnails', array(
					':class' => get_class($this),
				));
			}

			// Merge back in
			$this->thumbnails[$key] = $thumbnail;
		}
	}

	/**
	 * Logic to deal with uploading the image file and generating thumbnails according to
	 * what has been specified in the $thumbnails array.
	 *
	 * @param   Validation   $validation
	 * @param   Jelly_Model  $model
	 * @param   string       $field
	 * @return  void
	 * @uses    Image::factory
	 */
	public function _upload(Validation $validation, $model, $field)
	{
		if ( ! parent::_upload($validation, $model, $field))
		{
			// Save the original untouched
			return;
		}

		// Set the filename and the source
		$filename = $this->_filename;
		$source   = $this->path.$filename;

		// Create the image from the source
		$original = Image::factory($source, $this->driver);

		if ($this->transformations !== NULL)
		{
			// Process image transformations
			$image = $this->_transform($original, $this->transformations);

			// Save the image
			$image->save($source, $this->quality);
		}

		if ($model->changed($field))
		{
			// Process thumbnails
			foreach ($this->thumbnails as $thumbnail)
			{
				if ( ! isset($thumbnail['path']))
				{
					// Set the thumbnail path to the original's path if not set
					$thumbnail['path'] = $this->path;
				}

				// Set the destination
				$destination = $thumbnail['path'].$thumbnail['prefix'].$filename;

				// Delete old file if necessary
				$this->_delete_old_file($thumbnail['prefix'].$model->original($field), $thumbnail['path']);

				// Process thumbnail transformations
				$thumb = $this->_transform($original, $thumbnail['transformations']);

				// Save the thumbnail
				$thumb->save($destination, $thumbnail['quality']);
			}
		}
	}

	/**
	 * Applies transformations to the image.
	 *
	 * [!!] Image will not be saved.
	 *
	 * @param   Image  $image
	 * @param   array  $transformations
	 * @return  Image
	 */
	protected function _transform(Image $image, array $transformations)
	{
		// Process tranformations
		foreach ($transformations as $transformation => $params)
		{
			if ($transformation !== 'factory' OR $transformation !== 'save' OR $transformation !== 'render')
			{
				// Call the method excluding the factory, save and render methods
				call_user_func_array(array($image, $transformation), $params);
			}
		}

		return $image;
	}

} // End Jelly_Core_Field_Image