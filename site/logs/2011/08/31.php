<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-31 11:36:06 --- ERROR: Database_Exception [ 0 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 ( SELECT `content__items`.`id` AS `id`, `content__items`.`user_id` AS `user`, `content__items`.`state` AS `state` FROM `content__items` AS `content__items` GROUP BY `content__items`.`id` ORDER BY  ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-08-31 11:36:06 --- STRACE: Database_Exception [ 0 ]: [1064] You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 ( SELECT `content__items`.`id` AS `id`, `content__items`.`user_id` AS `user`, `content__items`.`state` AS `state` FROM `content__items` AS `content__items` GROUP BY `content__items`.`id` ORDER BY  ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\database\classes\kohana\database\query.php(225): Kohana_Database_MySQL->query(1, 'SELECT `content...', false, Array)
#1 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(175): Kohana_Database_Query->execute('default')
#2 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(129): Jelly_Core_Builder->select_all(NULL)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\admin\classes\controller.php(87): Jelly_Core_Builder->select()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Admin\Controller->action_display(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\admin', Array, '')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<cms3:include r...')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(372): CMS3\Engine\Document->render()
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#15 [internal function]: CMS3\Engine\Controller_App->action_display()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#17 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#18 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#20 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#21 {main}
2011-08-31 11:36:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-31 11:36:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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