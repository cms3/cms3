<?php

namespace CMS3\Engine;
 
class Renderer_Message extends Renderer implements Renderer_Interface {

	public function render($name, array $params = array())
	{
		if ($message = @$_GET['message']) // TODO: получать из Request->param
		{
			$type = isset($params['type']) ? $params['type'] : 'info';
			$data = Template::display('message', array('message' => $message, 'type' => $type));
		}
		else
		{
			$data = '';
		}
		
		return $data;
	}
	
}
