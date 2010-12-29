<?php

namespace CMS3\Engine;
 
class Renderer_Message extends Renderer {

	public function render($name, $params = array())
	{
		if ($message = @$_GET['message']) // TODO: получать из Request->param
		{
			$type = isset($params['type']) ? $params['type'] : 'info';
			$data = Template::render('message', array('message' => $message, 'type' => $type));
		}
		else
		{
			$data = '';
		}
		
		return $data;
	}
	
}
