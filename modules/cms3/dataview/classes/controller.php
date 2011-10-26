<?php

namespace CMS3\Dataview;

use CMS3\Engine\View;
use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\Request;
use CMS3\Engine\Model;
use CMS3\Engine\Exception;
//use CMS3\UI\Control_Interface;
use CMS3\Dataview\Helper_JSON as JSON;

class Controller extends Abstract_Controller //implements Control_Interface
{
	public function action_display(array $params = array())
	{
		$params = array_merge(Request::$initial->param(), $params); // TODO: автоматически
		if (isset($params['model']))
		{
			$model = Model_Grid::factory();
			$model->source($params['model']);
			$data = $model->load();

			$view_vars = array(
				'model' => $model->source(),
				'data' => $data
			);

			$model = Model::factory($params['model']);

			//print_r($model->query()->filter()->select()->as_array());

			if (isset($params['block_id']))
			{
				$view_vars['block_id'] = $params['block_id'];
			}
			
			echo View::factory('cms3\dataview\grid', $view_vars);
		}
	}

	public function action_save(array $params = array())
	{
		$params = array_merge(Request::$initial->param(), $params); // TODO: автоматически

		$model = Model::factory($params['model']);
		
		$items = $_REQUEST['items'];//TODO: парсинг переменных не учитывает возможности массивов

		$i = 0;
		foreach ($items as $item)
		{
			foreach ($item['ids'] as $id)
			{
				$form = $item;
				unset($form['ids']);
				$form['id'] = $id;

				$model = $model->query($form['id'])->select(); // TODO: Не загружать модель при сохранении
				
				$model->set($form);

				try
				{
					$model->save();
				}
				catch (Exception $e)
				{
					$error = $e->getMessage();
				}

				if ($id == 0)
				{
					$id = $model->id;
				}


				$data[$i] = $model->query($id)->select()->as_array();
				$i++;
			}
		}

		//print_r($data);
		echo json_encode($data);
		//echo JSON::encode($data);

		/*$view_vars = array(
			'model' => $model->source(),
			'data'  => $data
		);*/
	}

	public function action_delete(array $params = array())
	{
		$params = array_merge(Request::$initial->param(), $params); // TODO: автоматически
		$model = Model::factory($params['model']);

		$ids = $_REQUEST['ids'];//TODO: парсинг переменных не учитывает возможности массивов

		foreach ($ids as $id)
		{
			$model->query($id)->delete();
		}

	}
}
