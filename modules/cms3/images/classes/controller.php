<?php

namespace CMS3\Images;

use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\Request;

class Controller extends Abstract_Controller
{

	public function action_thumbnail(array $params = array())
	{
		$params = $_REQUEST; // TODO: автоматически

		if (isset($params['image']))
		{
			$model = Model_Image::factory()
					->query()
					->by_path($params['image'])
					->select();

			if ($model->loaded())
			{
				$this->response->headers('Content-Type', $model->file->mime);
				
				echo $model->thumbnail($params)->display();
			}
			else
			{
				throw new \HTTP_Exception_404();
			}
		}
	}
}