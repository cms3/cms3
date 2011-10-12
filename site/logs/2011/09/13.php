<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-13 12:30:30 --- ERROR: Database_Exception [ 0 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' `menu__items`.`ordering` ASC' at line 1 ( SELECT `menu__items`.`id` AS `id`, `menu__items`.`menu_id` AS `menu`, `menu__items`.`parent_id` AS `parent_id`, `menu__items`.`route_id` AS `route`, `menu__items`.`route_id` AS `route_id`, `menu__items`.`uri` AS `uri`, `menu__items`.`active_condition_id` AS `active_condition_id`, `menu__items`.`ordering` AS `ordering`, `menu__items`.`params` AS `params` FROM `menu__items` AS `menu__items` WHERE `menu__items`.`parent_id` = 0 GROUP BY `menu__items`.`id` ORDER BY , `menu__items`.`ordering` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-09-13 12:30:30 --- STRACE: Database_Exception [ 0 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ' `menu__items`.`ordering` ASC' at line 1 ( SELECT `menu__items`.`id` AS `id`, `menu__items`.`menu_id` AS `menu`, `menu__items`.`parent_id` AS `parent_id`, `menu__items`.`route_id` AS `route`, `menu__items`.`route_id` AS `route_id`, `menu__items`.`uri` AS `uri`, `menu__items`.`active_condition_id` AS `active_condition_id`, `menu__items`.`ordering` AS `ordering`, `menu__items`.`params` AS `params` FROM `menu__items` AS `menu__items` WHERE `menu__items`.`parent_id` = 0 GROUP BY `menu__items`.`id` ORDER BY , `menu__items`.`ordering` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\database\classes\kohana\database\query.php(225): Kohana_Database_MySQL->query(1, 'SELECT `menu__i...', false, Array)
#1 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(175): Kohana_Database_Query->execute('default')
#2 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(129): Jelly_Core_Builder->select_all(NULL)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\menu\classes\model\menu.php(29): Jelly_Core_Builder->select()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\menu\classes\model\menu.php(38): CMS3\Menu\Model_Menu->get_child_items()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\menu\classes\controller.php(18): CMS3\Menu\Model_Menu->get_items_array()
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Menu\Controller->action_display(Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\menu', Object(stdClass), '')
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(372): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-09-13 12:30:30 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-13 12:30:30 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-13 13:05:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-13 13:05:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-13 13:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: фвьшт ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-13 13:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: фвьшт ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#1 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#2 {main}
2011-09-13 13:56:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: фвьшт ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-09-13 13:56:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: фвьшт ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#1 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#2 {main}
2011-09-13 13:56:56 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-13 13:56:56 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-13 15:43:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-13 15:43:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-13 15:43:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\formo\classes\formo\core\form.php [ 60 ]
2011-09-13 15:43:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\formo\classes\formo\core\form.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-13 18:45:53 --- ERROR: ErrorException [ 1 ]: Class 'cms3\ui_grid\Component' not found ~ MODPATH\cms3\engine\classes\component.php [ 62 ]
2011-09-13 18:45:53 --- STRACE: ErrorException [ 1 ]: Class 'cms3\ui_grid\Component' not found ~ MODPATH\cms3\engine\classes\component.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-13 18:52:55 --- ERROR: ErrorException [ 1 ]: Class 'cms3\ui_grid\Component' not found ~ MODPATH\cms3\engine\classes\component.php [ 62 ]
2011-09-13 18:52:55 --- STRACE: ErrorException [ 1 ]: Class 'cms3\ui_grid\Component' not found ~ MODPATH\cms3\engine\classes\component.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-13 18:52:55 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-13 18:52:55 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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