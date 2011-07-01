<?php

namespace CMS3\Admin;

use CMS3\Engine\Controller_Component;
use CMS3\Engine\NS;
use CMS3\Engine\Request;
use CMS3\Engine\Template;
use CMS3\Engine\App;
use CMS3\Engine\Model;

class Controller extends Controller_Component {
	
	public $ui = NULL;
	
	protected function _load_ui($name)
	{
		$ui_class = NS::add_namespace(ucfirst($name), 'CMS3\UI');

		if (! class_exists($ui_class))
		{
			throw new Exception('Unable to load UI :class', array(':class' => $ui_class));
		}
	
		$this->ui = new $ui_class();
		$this->ui->load();
		
		return $this->ui;
	}
	
	// TODO
	public function action_delete_item(array $params = array())
	{
		$model = \CMS3\Engine\Model::factory($params['model']);
		if ($params['id'])
		{
			$model->query($params['id'])->delete();
		}
		
		$url = App::instance()->get_uri(5, array('admin' => 'admin', 'model' => $model->class_param())); // TODO
		\CMS3\Engine\App::instance()->redirect($url);
	}
	
	public function action_save_form(array $params = array())
	{
		// TODO: Проверка существования model
		$model = \CMS3\Engine\Model::factory($params['form']['model']);
		if ($params['form']['id'])
		{
			//$model->load_values(array('id' => $params['form']['id']));
			$model = $model->query($params['form']['id'])->select(); // TODO: Не загружать модель при сохранении
		}
		$model->set($params['form']);
		$model->save();
		
		$url = App::instance()->get_uri(5, array('admin' => 'admin', 'model' => $model->class_param(), 'id' => $model->id)); // TODO
		\CMS3\Engine\App::instance()->redirect($url);
	}
	
	public function action_display(array $params = array())
	{
		$model_name = \CMS3\Engine\Request::current()->param('model');
		$id = \CMS3\Engine\Request::current()->param('id');
		
		if ($model_name == NULL) // TODO
		{
			$modules = \CMS3::get_module_names('namespace');
			foreach ($modules as $module)
			{
				echo $module . '<br />';
			}
			return;
		}
		$model = Model::factory($model_name);
		
		// TODO
		if ($id != NULL)
		{
			$result = $model->query($id)->select();
			echo '<h3>' . $result . '</h3>';
			$editor = new \CMS3\UI\Editor_Form($model, $result);
			echo $editor->render('/action/cms3/admin/controller/save_form');
		}
		else
		{
			$result = $model->query()->select();
			echo '<h3>' . $result . '</h3>';
			$editor = new \CMS3\UI\Editor_Grid($model, $result);
			echo $editor->render();
		}
		
		return;
		
		$this->_load_ui('extjs'); // TODO: move to config
		
		$user = \Auth::instance()->current_user();
		if ($user != NULL) // TODO: check acl permission too
		{
			// TODO!
			$menu = $this->ui->control('menu');
			$menu->add_item('<b>Переход на главную</b>'); 
			$menu->add_separator();
			foreach (App::instance()->modules as $module)
			{
				if ($module->title != NULL)
				{
					$menu->add_item($module->title, 'alert(1);');
				}
			}
			
			$user = \Auth::instance()->current_user();
			if (is_object($user))
			{
			
				$user_data = $user->as_array();
				$user_data['params'] = $user->get_params_array();
			
				$user_info = $this->component->get_view('user_info', array('user' => $user_data));
			}
			else
			{
				$user_info = '';
			}

			echo Template::render('admin', array_merge($params, array(
				'ui' => $this->ui,
				'menu' => $menu,
				'user_info' => $user_info
			)));
		}
		else
		{
			$params['return'] = base64_encode(Request::current()->uri());
			echo Template::render('login/index', array_merge($params, array(
				'ui' => $this->ui
			)));
		}
	}
}
