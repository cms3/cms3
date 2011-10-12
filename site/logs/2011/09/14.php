<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-14 11:41:24 --- ERROR: ErrorException [ 1 ]: Class 'cms3\ui_grid\Component' not found ~ MODPATH\cms3\engine\classes\component.php [ 62 ]
2011-09-14 11:41:24 --- STRACE: ErrorException [ 1 ]: Class 'cms3\ui_grid\Component' not found ~ MODPATH\cms3\engine\classes\component.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 11:41:24 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 11:41:24 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(344): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 17:30:24 --- ERROR: ErrorException [ 1 ]: Class 'cms3\ui_grid\Component' not found ~ MODPATH\cms3\engine\classes\component.php [ 62 ]
2011-09-14 17:30:24 --- STRACE: ErrorException [ 1 ]: Class 'cms3\ui_grid\Component' not found ~ MODPATH\cms3\engine\classes\component.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 17:30:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 17:30:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(344): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:36:54 --- ERROR: ErrorException [ 1 ]: Class 'cms3\menu\Component' not found ~ MODPATH\cms3\engine\classes\component.php [ 62 ]
2011-09-14 18:36:54 --- STRACE: ErrorException [ 1 ]: Class 'cms3\menu\Component' not found ~ MODPATH\cms3\engine\classes\component.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 18:49:59 --- ERROR: Database_Exception [ 0 ]: [1054] Unknown column 'engine__blocks.module' in 'field list' ( SELECT `engine__blocks`.`id` AS `id`, `engine__blocks`.`position` AS `position`, `engine__blocks`.`module` AS `module`, `engine__blocks`.`action` AS `action`, `engine__blocks`.`condition_id` AS `condition`, `engine__blocks`.`ordering` AS `ordering`, `engine__blocks`.`params` AS `params` FROM `engine__blocks` AS `engine__blocks` WHERE `engine__blocks`.`position` = 'center' ORDER BY `engine__blocks`.`ordering` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-09-14 18:49:59 --- STRACE: Database_Exception [ 0 ]: [1054] Unknown column 'engine__blocks.module' in 'field list' ( SELECT `engine__blocks`.`id` AS `id`, `engine__blocks`.`position` AS `position`, `engine__blocks`.`module` AS `module`, `engine__blocks`.`action` AS `action`, `engine__blocks`.`condition_id` AS `condition`, `engine__blocks`.`ordering` AS `ordering`, `engine__blocks`.`params` AS `params` FROM `engine__blocks` AS `engine__blocks` WHERE `engine__blocks`.`position` = 'center' ORDER BY `engine__blocks`.`ordering` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\database\classes\kohana\database\query.php(225): Kohana_Database_MySQL->query(1, 'SELECT `engine_...', false, Array)
#1 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(175): Kohana_Database_Query->execute('default')
#2 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(129): Jelly_Core_Builder->select_all(NULL)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\model\builder\block.php(9): Jelly_Core_Builder->select()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(14): CMS3\Engine\Model_Builder_Block->by_position('center')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('template', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(366): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-09-14 18:50:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:50:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:50:15 --- ERROR: Database_Exception [ 0 ]: [1054] Unknown column 'engine__blocks.module' in 'field list' ( SELECT `engine__blocks`.`id` AS `id`, `engine__blocks`.`position` AS `position`, `engine__blocks`.`module` AS `module`, `engine__blocks`.`action` AS `action`, `engine__blocks`.`condition_id` AS `condition`, `engine__blocks`.`ordering` AS `ordering`, `engine__blocks`.`params` AS `params` FROM `engine__blocks` AS `engine__blocks` WHERE `engine__blocks`.`position` = 'center' ORDER BY `engine__blocks`.`ordering` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-09-14 18:50:15 --- STRACE: Database_Exception [ 0 ]: [1054] Unknown column 'engine__blocks.module' in 'field list' ( SELECT `engine__blocks`.`id` AS `id`, `engine__blocks`.`position` AS `position`, `engine__blocks`.`module` AS `module`, `engine__blocks`.`action` AS `action`, `engine__blocks`.`condition_id` AS `condition`, `engine__blocks`.`ordering` AS `ordering`, `engine__blocks`.`params` AS `params` FROM `engine__blocks` AS `engine__blocks` WHERE `engine__blocks`.`position` = 'center' ORDER BY `engine__blocks`.`ordering` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\database\classes\kohana\database\query.php(225): Kohana_Database_MySQL->query(1, 'SELECT `engine_...', false, Array)
#1 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(175): Kohana_Database_Query->execute('default')
#2 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(129): Jelly_Core_Builder->select_all(NULL)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\model\builder\block.php(9): Jelly_Core_Builder->select()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(14): CMS3\Engine\Model_Builder_Block->by_position('center')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('template', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(366): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-09-14 18:50:15 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:50:15 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:50:23 --- ERROR: ErrorException [ 2048 ]: Declaration of CMS3\Engine\Controller_Component::factory() should be compatible with that of CMS3\Engine\Controller::factory() ~ MODPATH\cms3\engine\classes\controller\component.php [ 21 ]
2011-09-14 18:50:23 --- STRACE: ErrorException [ 2048 ]: Declaration of CMS3\Engine\Controller_Component::factory() should be compatible with that of CMS3\Engine\Controller::factory() ~ MODPATH\cms3\engine\classes\controller\component.php [ 21 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(138): Kohana_Core::error_handler(2048, 'Declaration of ...', 'D:\Data\Sites\h...', 21, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(138): CMS3\Engine\Core::auto_load()
#2 [internal function]: CMS3\Engine\Core::auto_load('CMS3\Engine\Con...')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\shop\classes\controller.php(7): spl_autoload_call('CMS3\Engine\Con...')
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(138): require_once('D:\Data\Sites\h...')
#5 [internal function]: CMS3\Engine\Core::auto_load('cms3\shop\Contr...')
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(76): spl_autoload_call('cms3\shop\Contr...')
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(42): CMS3\Engine\Controller::factory('cms3\shop')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\shop', Array, '')
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('template', Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(366): CMS3\Engine\Document->render()
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#21 [internal function]: CMS3\Engine\Controller_App->action_display()
#22 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#23 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#24 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#25 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#26 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#27 {main}
2011-09-14 18:50:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:50:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:50:59 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\Controller_Component' not found ~ MODPATH\cms3\shop\classes\controller.php [ 7 ]
2011-09-14 18:50:59 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\Controller_Component' not found ~ MODPATH\cms3\shop\classes\controller.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 18:50:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:50:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:51:30 --- ERROR: ErrorException [ 8 ]: Undefined property: CMS3\Shop\Controller::$component ~ MODPATH\cms3\shop\classes\controller.php [ 11 ]
2011-09-14 18:51:30 --- STRACE: ErrorException [ 8 ]: Undefined property: CMS3\Shop\Controller::$component ~ MODPATH\cms3\shop\classes\controller.php [ 11 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\shop\classes\controller.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Data\Sites\h...', 11, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Shop\Controller->action_display(Array)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\shop', Array, '')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('template', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(366): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-09-14 18:51:30 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:51:30 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:52:45 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Shop\Request' not found ~ MODPATH\cms3\shop\classes\controller.php [ 11 ]
2011-09-14 18:52:45 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Shop\Request' not found ~ MODPATH\cms3\shop\classes\controller.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 18:52:45 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:52:45 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:53:00 --- ERROR: ErrorException [ 8 ]: Undefined index: product_id ~ MODPATH\cms3\shop\classes\controller.php [ 13 ]
2011-09-14 18:53:00 --- STRACE: ErrorException [ 8 ]: Undefined index: product_id ~ MODPATH\cms3\shop\classes\controller.php [ 13 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\shop\classes\controller.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Data\Sites\h...', 13, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Shop\Controller->action_display(Array)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\shop', Array, '')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('template', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(366): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-09-14 18:53:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:53:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:53:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:53:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:53:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:53:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:53:44 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Menu\View' not found ~ MODPATH\cms3\menu\classes\controller.php [ 24 ]
2011-09-14 18:53:44 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Menu\View' not found ~ MODPATH\cms3\menu\classes\controller.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 18:53:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:53:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:55:08 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\Controller_Component' not found ~ MODPATH\cms3\auth\classes\controller.php [ 9 ]
2011-09-14 18:55:08 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\Controller_Component' not found ~ MODPATH\cms3\auth\classes\controller.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 18:55:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:55:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:55:57 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\Controller_Component' not found ~ MODPATH\cms3\auth\classes\controller.php [ 9 ]
2011-09-14 18:55:57 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\Controller_Component' not found ~ MODPATH\cms3\auth\classes\controller.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 18:55:57 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:55:57 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:56:07 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\Component' not found ~ MODPATH\cms3\auth\classes\component.php [ 13 ]
2011-09-14 18:56:07 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\Component' not found ~ MODPATH\cms3\auth\classes\component.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 18:56:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:56:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:56:46 --- ERROR: ErrorException [ 1 ]: Cannot access  property Auth::$_instance ~ MODPATH\cms3\engine\classes\singleton.php [ 28 ]
2011-09-14 18:56:46 --- STRACE: ErrorException [ 1 ]: Cannot access  property Auth::$_instance ~ MODPATH\cms3\engine\classes\singleton.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 18:56:46 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:56:46 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:57:19 --- ERROR: ErrorException [ 8 ]: Undefined property: CMS3\Auth\Controller::$component ~ MODPATH\cms3\auth\classes\controller.php [ 52 ]
2011-09-14 18:57:19 --- STRACE: ErrorException [ 8 ]: Undefined property: CMS3\Auth\Controller::$component ~ MODPATH\cms3\auth\classes\controller.php [ 52 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\auth\classes\controller.php(52): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\Data\Sites\h...', 52, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Auth\Controller->action_display_login_form(Array)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_login_f...', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('login_form', Array)
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\auth', Array, 'login_form')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(366): CMS3\Engine\Document->render()
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#12 [internal function]: CMS3\Engine\Controller_App->action_display()
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#14 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#15 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#17 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#18 {main}
2011-09-14 18:57:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:57:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 18:58:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 18:58:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 19:00:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to detect template engine for template cms3\authorm/login ~ MODPATH\cms3\engine\classes\template.php [ 126 ]
2011-09-14 19:00:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to detect template engine for template cms3\authorm/login ~ MODPATH\cms3\engine\classes\template.php [ 126 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(70): CMS3\Engine\Template->_load_engine()
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(56): CMS3\Engine\Template->load('cms3\auth?orm/l...')
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\auth?orm/l...', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\auth?orm/l...', Array)
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\auth\classes\controller.php(54): Kohana_View->__toString()
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Auth\Controller->action_display_login_form(Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_login_f...', Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('login_form', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\auth', Array, 'login_form')
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(366): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-09-14 19:00:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 19:00:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 19:01:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to detect template engine for template cms3\authorm_login ~ MODPATH\cms3\engine\classes\template.php [ 126 ]
2011-09-14 19:01:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to detect template engine for template cms3\authorm_login ~ MODPATH\cms3\engine\classes\template.php [ 126 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(70): CMS3\Engine\Template->_load_engine()
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(56): CMS3\Engine\Template->load('cms3\auth?orm_l...')
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\auth?orm_l...', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\auth?orm_l...', Array)
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\auth\classes\controller.php(54): Kohana_View->__toString()
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Auth\Controller->action_display_login_form(Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_login_f...', Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('login_form', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\auth', Array, 'login_form')
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(366): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-09-14 19:01:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 19:01:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 19:02:56 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 19:02:56 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 19:03:03 --- ERROR: ErrorException [ 1 ]: Class 'cms3\ui_grid\Controller' not found ~ MODPATH\cms3\engine\classes\controller.php [ 76 ]
2011-09-14 19:03:03 --- STRACE: ErrorException [ 1 ]: Class 'cms3\ui_grid\Controller' not found ~ MODPATH\cms3\engine\classes\controller.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 19:03:33 --- ERROR: ErrorException [ 1 ]: Class 'cms3\ui_grid\Controller' not found ~ MODPATH\cms3\engine\classes\controller.php [ 76 ]
2011-09-14 19:03:33 --- STRACE: ErrorException [ 1 ]: Class 'cms3\ui_grid\Controller' not found ~ MODPATH\cms3\engine\classes\controller.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-14 19:05:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 19:05:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 19:06:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: shop_path ~ MODPATH\cms3\shop\classes\controller.php [ 14 ]
2011-09-14 19:06:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: shop_path ~ MODPATH\cms3\shop\classes\controller.php [ 14 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\shop\classes\controller.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Data\Sites\h...', 14, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Shop\Controller->action_display(Array)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\shop', Array, '')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('template', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(366): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('shop/1/1', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-09-14 19:06:15 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 19:06:15 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 19:06:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\cms3\shop\classes\controller.php [ 14 ]
2011-09-14 19:06:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\cms3\shop\classes\controller.php [ 14 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\shop\classes\controller.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\Data\Sites\h...', 14, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Shop\Controller->action_display(Array)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\shop', Array, '')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('template', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(366): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('shop/1/1', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-09-14 19:06:24 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 19:06:24 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 19:06:34 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 19:06:34 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 19:06:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 19:06:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 19:06:56 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-14 19:06:56 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(338): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-14 19:07:03 --- ERROR: ErrorException [ 1 ]: Class 'cms3\ui_grid\Controller' not found ~ MODPATH\cms3\engine\classes\controller.php [ 76 ]
2011-09-14 19:07:03 --- STRACE: ErrorException [ 1 ]: Class 'cms3\ui_grid\Controller' not found ~ MODPATH\cms3\engine\classes\controller.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}