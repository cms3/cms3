<?php

class Kohana extends Kohana_Core {

	// TODO: для обратной совместимости; удалить после обновления модулей
	public static function config($group)
	{
		return \Kohana::$config->load($group);
	}
	
	public static function cache($name, $data = NULL, $lifetime = NULL)
	{
		return NULL;
	}
}
