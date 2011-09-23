<?php

namespace CMS3\Engine;
 
class Renderer_Block extends Renderer implements Renderer_Interface {

	public function render($name, array $params = array())
	{
		if (empty($params['position']))
		{
			$params['position'] = 'default';
		}

		$blocks = Model::factory('block')->query()->by_position($params['position']);
		
		$data = '';
		foreach ($blocks as $block)
		{
			if (! empty($block->module) && App::check_page_condition($block->condition->condition))
			{
				$params = $block->params;
				$params['block_id'] = $block->id; // TODO: кривовато,  т.к. block_id может перекрыть пользовательский параметр
				$content = $this->get_action_output($block->module, $params, $block->action);
				if ($content)
				{
					$tpl = strtolower($params['template']);
					if ($tpl == 'raw')
					{
						$data .= $content;
					}
					else
					{
						$data .= Template::display('block/' . $tpl, array('content' => $content));
					}
				}
			}
		}

		return $data;
	}

	protected function get_action_output($module, $params, $action)
	{
		$data = '';

		$controller = Controller::factory($module);

		if ($controller instanceof Controller)
		{
			ob_start();
				$controller->display($action, (array)$params);
				$data = ob_get_contents();
			ob_end_clean();
		}
		
		return $data;
	}
}

