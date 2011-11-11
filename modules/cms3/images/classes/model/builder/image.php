<?php

namespace CMS3\Images;

use CMS3\Engine\ORM_Builder;
 
class Model_Builder_Image extends ORM_Builder {

	public function by_path($path)
	{
		$foreign = $this->meta()->field('file')->foreign;

		$path = ltrim($path, '/');
		$parts = explode('/', $path);

		$filename = array_pop($parts);
		$dir = implode('/', $parts);

		$this->join(array($foreign['model'], 'files'))
			->on('files.id', '=', 'file_id')
			->where('files.filename', '=', $filename) // TODO: lowercase
			->where('files.dir', '=', $dir)
			->limit(1);

		return $this;
	}
}
