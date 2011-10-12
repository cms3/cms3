<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-07 19:38:55 --- ERROR: Database_Exception [ 0 ]: [1062] Duplicate entry 'kint' for key 'name' ( INSERT INTO `engine__modules` (`name`, `core`, `ordering`, `id`, `module`) VALUES ('kint', '1', 0, 0, '') ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-10-07 19:38:55 --- STRACE: Database_Exception [ 0 ]: [1062] Duplicate entry 'kint' for key 'name' ( INSERT INTO `engine__modules` (`name`, `core`, `ordering`, `id`, `module`) VALUES ('kint', '1', 0, 0, '') ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
--
#0 Z:\home\cms3\www\modules\database\classes\kohana\database\query.php(225): Kohana_Database_MySQL->query(2, 'INSERT INTO `en...', false, Array)
#1 Z:\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(201): Kohana_Database_Query->execute('default')
#2 Z:\home\cms3\www\modules\cms3\engine\classes\model.php(79): Jelly_Core_Builder->insert()
#3 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(63): CMS3\Engine\Model->save()
#4 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_save(Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(264): CMS3\Engine\Controller->action('save', Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(24): CMS3\Engine\App->dispatch_action('cms3\ui_grid', 'save')
#7 [internal function]: CMS3\Engine\Controller_App->action_call()
#8 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#9 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#10 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#11 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#12 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#13 {main}
2011-10-07 20:20:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-10-07 20:20:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}