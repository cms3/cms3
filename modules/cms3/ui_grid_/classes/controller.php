<?php

namespace CMS3\UI_Grid;

use CMS3\Engine\View;
use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\Request;
use CMS3\Engine\Model;
use CMS3\UI\Control_Interface;

class Controller extends Abstract_Controller implements Control_Interface
{
	public function action_display(array $params = array())
	{
		$params = Request::$initial->param(); // TODO: автоматически
		if (isset($params['model']))
		{
			$model = Model_Grid::factory();
			$model->source($params['model']);

			$fields =  $model->source()->meta()->fields_data();
			//print_r($fields); exit;
			$data = $model->load();

			$view_vars = array(
				'model' => $model->source(),
				'fields' => $fields,
				'data' => $data
			);
			
			echo View::factory('cms3\ui_grid\grid', $view_vars);
		}
	}
}
