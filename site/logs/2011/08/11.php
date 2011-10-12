<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-11 11:45:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '@' ~ MODPATH\cms3\engine\classes\app.php [ 47 ]
2011-08-11 11:45:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '@' ~ MODPATH\cms3\engine\classes\app.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-11 11:45:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '@' ~ MODPATH\cms3\engine\classes\app.php [ 47 ]
2011-08-11 11:45:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '@' ~ MODPATH\cms3\engine\classes\app.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-11 11:48:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 11:48:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(256): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 11:50:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 11:50:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(256): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 11:52:56 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 11:52:56 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(262): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 11:54:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 11:54:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(262): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 12:17:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 12:17:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 12:19:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 12:19:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 12:33:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 12:33:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 13:09:30 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 13:09:30 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 13:09:32 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 13:09:32 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 13:11:36 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 13:11:36 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 13:11:37 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 13:11:37 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 13:11:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 13:11:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 13:12:04 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 13:12:04 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 13:12:19 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 13:12:19 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:41:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: t ~ MODPATH\cms3\engine\classes\app.php [ 37 ]
2011-08-11 16:41:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: t ~ MODPATH\cms3\engine\classes\app.php [ 37 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Data\Sites\h...', 37, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(27): CMS3\Engine\App->param('content', 'item')
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(9): CMS3\Engine\ORM_Builder->_make_filters()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(31): CMS3\Engine\ORM_Builder->filter()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display_list(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_list', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(23): CMS3\Engine\Controller->display('list')
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display(Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\content', Array, '')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('block', Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('template', Array)
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(299): CMS3\Engine\Document->render()
#22 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#23 [internal function]: CMS3\Engine\Controller_App->action_display()
#24 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#25 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#26 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#27 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#28 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#29 {main}
2011-08-11 16:41:15 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:41:15 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(271): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:41:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: t ~ MODPATH\cms3\engine\classes\app.php [ 37 ]
2011-08-11 16:41:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: t ~ MODPATH\cms3\engine\classes\app.php [ 37 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Data\Sites\h...', 37, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(27): CMS3\Engine\App->param('content', 'item')
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(9): CMS3\Engine\ORM_Builder->_make_filters()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(31): CMS3\Engine\ORM_Builder->filter()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display_list(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_list', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(23): CMS3\Engine\Controller->display('list')
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display(Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\content', Array, '')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('block', Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('template', Array)
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(299): CMS3\Engine\Document->render()
#22 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#23 [internal function]: CMS3\Engine\Controller_App->action_display()
#24 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#25 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#26 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#27 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#28 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#29 {main}
2011-08-11 16:41:28 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:41:28 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(271): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:41:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: t ~ MODPATH\cms3\engine\classes\app.php [ 37 ]
2011-08-11 16:41:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: t ~ MODPATH\cms3\engine\classes\app.php [ 37 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Data\Sites\h...', 37, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(27): CMS3\Engine\App->param('content', 'item')
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(9): CMS3\Engine\ORM_Builder->_make_filters()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(31): CMS3\Engine\ORM_Builder->filter()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display_list(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_list', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(23): CMS3\Engine\Controller->display('list')
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display(Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\content', Array, '')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('block', Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('template', Array)
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(299): CMS3\Engine\Document->render()
#22 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#23 [internal function]: CMS3\Engine\Controller_App->action_display()
#24 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#25 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#26 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#27 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#28 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#29 {main}
2011-08-11 16:41:30 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:41:30 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(271): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:41:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: t ~ MODPATH\cms3\engine\classes\app.php [ 37 ]
2011-08-11 16:41:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: t ~ MODPATH\cms3\engine\classes\app.php [ 37 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Data\Sites\h...', 37, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(27): CMS3\Engine\App->param('content', 'item')
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(9): CMS3\Engine\ORM_Builder->_make_filters()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(31): CMS3\Engine\ORM_Builder->filter()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display_list(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_list', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(23): CMS3\Engine\Controller->display('list')
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display(Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\content', Array, '')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('block', Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('template', Array)
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(299): CMS3\Engine\Document->render()
#22 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#23 [internal function]: CMS3\Engine\Controller_App->action_display()
#24 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#25 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#26 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#27 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#28 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#29 {main}
2011-08-11 16:41:31 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:41:31 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(271): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:41:38 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\cms3\engine\classes\app.php [ 38 ]
2011-08-11 16:41:38 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\cms3\engine\classes\app.php [ 38 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(38): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\Data\Sites\h...', 38, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(27): CMS3\Engine\App->param('content', 'item')
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(9): CMS3\Engine\ORM_Builder->_make_filters()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(31): CMS3\Engine\ORM_Builder->filter()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display_list(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_list', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(23): CMS3\Engine\Controller->display('list')
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display(Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\content', Array, '')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('block', Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('template', Array)
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(300): CMS3\Engine\Document->render()
#22 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#23 [internal function]: CMS3\Engine\Controller_App->action_display()
#24 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#25 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#26 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#27 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#28 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#29 {main}
2011-08-11 16:41:39 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:41:39 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(272): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:41:50 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\cms3\engine\classes\app.php [ 38 ]
2011-08-11 16:41:50 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\cms3\engine\classes\app.php [ 38 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(38): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\Data\Sites\h...', 38, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(27): CMS3\Engine\App->param('content', 'item')
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(9): CMS3\Engine\ORM_Builder->_make_filters()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(31): CMS3\Engine\ORM_Builder->filter()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display_list(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_list', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(23): CMS3\Engine\Controller->display('list')
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display(Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\content', Array, '')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('block', Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('template', Array)
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(300): CMS3\Engine\Document->render()
#22 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#23 [internal function]: CMS3\Engine\Controller_App->action_display()
#24 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#25 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#26 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#27 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#28 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#29 {main}
2011-08-11 16:41:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:41:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(272): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:43:52 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\cms3\engine\classes\app.php [ 39 ]
2011-08-11 16:43:52 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\cms3\engine\classes\app.php [ 39 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(39): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\Data\Sites\h...', 39, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(27): CMS3\Engine\App->param('content', 'item')
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(9): CMS3\Engine\ORM_Builder->_make_filters()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(31): CMS3\Engine\ORM_Builder->filter()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display_list(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_list', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(23): CMS3\Engine\Controller->display('list')
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display(Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\content', Array, '')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('block', Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('template', Array)
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(301): CMS3\Engine\Document->render()
#22 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#23 [internal function]: CMS3\Engine\Controller_App->action_display()
#24 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#25 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#26 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#27 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#28 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#29 {main}
2011-08-11 16:43:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:43:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(273): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:43:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:43:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(273): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:44:01 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\cms3\engine\classes\app.php [ 39 ]
2011-08-11 16:44:01 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\cms3\engine\classes\app.php [ 39 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(39): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\Data\Sites\h...', 39, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(27): CMS3\Engine\App->param('content', 'item')
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(9): CMS3\Engine\ORM_Builder->_make_filters()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(31): CMS3\Engine\ORM_Builder->filter()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display_list(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_list', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(23): CMS3\Engine\Controller->display('list')
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display(Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\content', Array, '')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('block', Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('template', Array)
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(301): CMS3\Engine\Document->render()
#22 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#23 [internal function]: CMS3\Engine\Controller_App->action_display()
#24 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#25 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#26 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#27 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#28 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#29 {main}
2011-08-11 16:44:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:44:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(273): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:45:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:45:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(272): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:45:43 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:45:43 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(272): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:45:49 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:45:49 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(272): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:46:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:46:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(274): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:46:46 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:46:46 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 16:47:37 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 16:47:37 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(269): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 17:06:19 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 17:06:19 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(268): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 17:10:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 17:10:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(268): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 17:18:20 --- ERROR: Database_Exception [ 0 ]: [1054] Unknown column 'text' in 'where clause' ( SELECT `content__items`.`id` AS `id`, `content__items`.`user_id` AS `user`, `content__items`.`state` AS `state` FROM `content__items` AS `content__items` WHERE `text` = '555' ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-08-11 17:18:20 --- STRACE: Database_Exception [ 0 ]: [1054] Unknown column 'text' in 'where clause' ( SELECT `content__items`.`id` AS `id`, `content__items`.`user_id` AS `user`, `content__items`.`state` AS `state` FROM `content__items` AS `content__items` WHERE `text` = '555' ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\database\classes\kohana\database\query.php(225): Kohana_Database_MySQL->query(1, 'SELECT `content...', false, Array)
#1 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(175): Kohana_Database_Query->execute('default')
#2 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(129): Jelly_Core_Builder->select_all(NULL)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(31): Jelly_Core_Builder->select()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display_list(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display_list', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\controller.php(23): CMS3\Engine\Controller->display('list')
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Content\Controller->action_display(Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\content', Array, '')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('block', Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<div class="blo...')
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\template.php(9): CMS3\Engine\Template::display('page', Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Template->render('page', Array)
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(229): CMS3\Engine\Renderer::display('template', Array)
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE html>...')
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(296): CMS3\Engine\Document->render()
#22 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#23 [internal function]: CMS3\Engine\Controller_App->action_display()
#24 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#25 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#26 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#27 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#28 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#29 {main}
2011-08-11 17:20:41 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 17:20:41 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(268): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 18:40:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method CMS3\Engine\Field_Integer::add_filter() ~ MODPATH\cms3\engine\classes\orm\builder.php [ 37 ]
2011-08-11 18:40:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method CMS3\Engine\Field_Integer::add_filter() ~ MODPATH\cms3\engine\classes\orm\builder.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-11 18:42:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 18:42:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(268): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 18:43:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 18:43:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(268): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-11 18:45:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-11 18:45:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(268): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}