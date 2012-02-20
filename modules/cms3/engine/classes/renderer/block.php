<?php

namespace CMS3\Engine;
 
class Renderer_Block extends Renderer implements Renderer_Interface {

	public function render($name, array $params = array())
	{
		if (empty($params['position']))
		{
			$params['position'] = 'default';
		}

		$blocks = Model_Block::factory()
				->query()
				->by_position($params['position'])
				->select();

		$data = '';
		foreach ($blocks as $block)
		{
			if (App::check_page_condition($block->condition->condition))
			{
				$block_params = (array)$block->params;
				$block_params['block_id'] = $block->id;
				if (! empty($block->module))
				{
					$content = $this->get_action_output($block->module, $block_params, $block->action, $block->template);
				}
				else
				{
					$content = $block->content;
				}

				$tpl = isset($params['template']) ? strtolower($params['template']) : 'raw';
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

		return $data;
	}

	protected function get_action_output($module, $params, $action, $template)
	{
		$data = '';

		$controller = Controller::factory($module);

		if ($controller instanceof Controller)
		{
			ob_start();
				$controller->display($action, (array)$params, $template);
				$data = ob_get_contents();
			ob_end_clean();
		}
		
		return $data;
	}
}

