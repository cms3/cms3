<?php

namespace CMS3\Images;

use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\Request;

class Controller extends Abstract_Controller
{

	public function action_thumbnail(array $params = array())
	{
       // print_r($params); exit;

		if (isset($params['image']) || isset($params['thumbnail']))
		{
            $model = Model_Image::factory();

            if (isset($params['thumbnail']))
            {
                $parts = explode('_', $params['thumbnail']);
                $thumb_params = array_pop($parts);
                $filename = implode('_', $parts);

                $parts = explode('.', $thumb_params);
                $ext = array_pop($parts);
                $thumb_params = implode('', $parts);

                $image_path = 'files/images/orig/' . $filename . '.' . $ext; // TODO
                $thumb_params = $model->decode_params($thumb_params);
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