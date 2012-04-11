<?php

namespace CMS3\Images;

use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\Request;

class Controller extends Abstract_Controller
{

	public function action_thumbnail(array $params = array())
	{
		if (isset($params['image']) || isset($params['thumbnail']))
		{
            $model = Model_Image::factory();

            if (isset($params['thumbnail']))
            {
                list($dir, $filename) = explode('/', $params['thumbnail']);

                $image_path = 'files/images/orig/' . $filename; // TODO
                $thumb_params = $model->decode_params($dir);
            }
            else
            {
                $image_path = $params['image'];
                $thumb_params = $params;
                unset($thumb_params['image']);
            }

			$model = $model
				->query()
				->by_path($image_path)
				->select();

			if ($model->loaded())
			{
				$this->response->headers('Content-Type', $model->file->mime);
                header('Content-Type: ' . $model->file->mime); // TODO ! разобраться почему через response не работает
				
				echo $model->thumbnail($thumb_params)->display();
			}
			else
			{
				throw new \HTTP_Exception_404();
			}
		}
	}
}