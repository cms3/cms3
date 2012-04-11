<?php

namespace CMS3\Dataview;

use CMS3\Engine\View;
use CMS3\Engine\Controller as Abstract_Controller;
use CMS3\Engine\Request;
use CMS3\Engine\Model;
use CMS3\Engine\Exception;
use CMS3\Dataview\Helper_JSON as JSON;

class Controller extends Abstract_Controller
{
	protected $_model = NULL;

	public function model($model = NULL)
	{
		if ($model != NULL)
		{
			$this->_model = Model::factory($model);
		}

		return $this->_model;
	}

	public function action_display(array $params = array())
	{
		// TODO: автоматически
		$params = array_merge(Request::$initial->param(), $params);

		$helper = new Helper_Dataview();
		$models = $helper->build_models($params['model']);

		$view_vars = array(
			'models' => $models,
			'block_id' => $params['block_id'],
			//TODO: получать текущий контроллер с неймспейсом, для ссылок сохранения/добавления/ets
			'controller' => get_class($this),
			'model' => $params['model'],
		);

		echo View::factory('cms3\dataview\grid', $view_vars);
	}

	public function action_save(array $params = array())
	{
		// TODO: автоматически
		$params = array_merge(Request::$initial->param(), $params);

		// TODO: запихнуть в construct
		$this->model = $model = Model::factory($params['model']);

		// TODO: парсинг переменных не учитывает возможности массивов. $params['items'] - не существует
		$items = $_REQUEST['items'];

		$results = array();
		// В одном запросе может быть несколько форм
		foreach ($items as $item) {
			// Одна форма может менять сразу несколько записей
			// TODO: primary может быть не только id, и даже составной ключ, а вообще лучше переписать под дублирование произвольных полей
			if ( !isset($item['ids']) )
            {
                $item['ids'] = array(0);
            }

            foreach ($item['ids'] as $id) {
				// Строим форму
				$form = $item;
				// TODO: primary может быть не только id, и даже составной ключ
				$form['id'] = $id;
				unset($form['ids']);

				foreach($form as $field_name => $field_value)
				{
					$field_name_decamelize = \inflector::decamelize($field_name, '_');
					if ($field_name != $field_name_decamelize)
					{
						unset($form[$field_name]);
						$form[$field_name_decamelize] = $field_value;
					}
				}

				// TODO: Не загружать модель при сохранении
				// TODO: primary может быть не только id, и даже составной ключ
				$model = $model->query($form['id'])->select();

				$model->set($form);

				try {
					$model->save();
				}
				catch (Exception $e)
                {
					// TODO: обработка ошибок, функция продолжит выполнение?
					$error = $e->getMessage();
				}

				// Если запись новая (id == 0), то получаем id записи
				// TODO: primary может быть не только id, и даже составной ключ
				if ($id == 0) {
					$item['ids'][] = $model->id();
				}
			}

			$primary_key = $model->meta()->primary_key();
			$result = $model
					->query()
					// TODO: primary может быть не только id, и даже составной ключ
					->where($primary_key, 'IN', $item['ids'])
					->select_all()
					->as_array();

			$results = array_merge($result, $results);

		}
		$results = Helper_Dataview::clear_items($results);
		echo JSON::encode($results, array(
			'camelize' => true
		));
	}

	public function action_delete(array $params = array())
	{
		// TODO: автоматически
		$params = array_merge(Request::$initial->param(), $params);

		// TODO: запихнуть в construct
		$this->model = $model = Model::factory($params['model']);

		// TODO: парсинг переменных не учитывает возможности массивов.
		// TODO: primary может быть не только id, и даже составной ключ, а вообще лучше переписать под дублирование произвольных полей
		$ids = $_REQUEST['ids'];

		$primary_key = $model->meta()->primary_key();
		$model ->query()
		       ->where($primary_key, 'IN', $ids)
			   ->delete();

		// TODO: Сообщение об ошибке. Или запрос количества удаленных записей.
	}
}