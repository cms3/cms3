<?php

namespace CMS3\Engine;
 
class Renderer_Block extends Renderer {

	public function render($name, array $params = array())
	{
		if (empty($params["position"]))
		{
			$params["position"] = "default";
		}

		$blocks = Model::factory('block')->query()->by_position($params["position"]);
		
		$data = "";
		foreach ($blocks as $block)
		{
			if (! empty($block->component) && App::check_page_condition($block->condition->condition))
			{
				$content = $this->get_action_output($block->component, $block->get_params_hash(), $block->action);
				if ($content)
				{
					$tpl = strtolower($params['template']);
					if ($tpl == 'raw')
					{
						$data .= $content;
					}
					else
					{
						$data .= Template::render("block/" . $tpl, array('content' => $content));
					}
				}
			}
		}

		return $data;
	}

	protected function get_action_output($comp_name, $params, $action)
	{
		$controller = Component::instance($comp_name)->controller;
		
		ob_start();
		$controller->display($action, $params);
		$data = ob_get_contents();
		ob_end_clean();
		
		return $data;
	}
}

