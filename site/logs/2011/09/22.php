<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-22 11:21:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_USE ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 11 ]
2011-09-22 11:21:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_USE ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:21:27 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 11:21:27 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 11:22:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_USE ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 11 ]
2011-09-22 11:22:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_USE ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 11:22:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 11:22:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:04:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:04:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:28:15 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:28:15 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:39:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:39:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:41:36 --- ERROR: CMS3\Engine\Exception [ 0 ]: Menu ID doesn't set ~ MODPATH\cms3\menu\classes\controller.php [ 16 ]
2011-09-22 13:41:36 --- STRACE: CMS3\Engine\Exception [ 0 ]: Menu ID doesn't set ~ MODPATH\cms3\menu\classes\controller.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\Menu\Controller->action_display(Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\menu', NULL, '')
#4 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#7 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#8 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#9 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#11 [internal function]: CMS3\Engine\Controller_App->action_display()
#12 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#13 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#14 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#15 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#16 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#17 {main}
2011-09-22 13:41:37 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:41:37 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:42:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:42:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:43:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:43:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:43:39 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:43:39 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:45:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:45:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:45:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:45:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:46:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:46:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:46:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:46:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:47:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:47:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:49:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:49:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:50:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:50:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:51:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:51:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:51:10 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:51:10 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:51:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:51:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:51:36 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:51:36 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 13:53:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:53:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:57:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:57:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:57:59 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
2011-09-22 13:57:59 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 16, Array)
#1 [internal function]: CMS3\Engine\Controller_App->action_call()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#3 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#4 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#6 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#7 {main}
2011-09-22 13:58:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:58:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:58:01 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:58:01 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:58:05 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:58:05 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:58:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:58:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:58:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:58:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:58:12 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:58:12 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:59:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:59:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/lo...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:59:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:59:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/us...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:59:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:59:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/ge...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:59:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:59:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/sh...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:59:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:59:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/bl...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 13:59:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 13:59:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:00:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/lo...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:00:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/sh...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:00:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/ge...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:00:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('themes/img/user...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:00:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/bl...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:00:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:00:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/sh...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:00:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/bl...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:00:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/ge...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:00:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for png format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('png')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/images/lo...', 'ru_RU', 'png')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:00:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:00:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:01:24 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:01:24 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:01:32 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:01:32 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:01:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:01:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:07:21 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
2011-09-22 14:07:21 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 16, Array)
#1 [internal function]: CMS3\Engine\Controller_App->action_call()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#3 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#4 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#6 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#7 {main}
2011-09-22 14:07:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:34 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:34 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:37 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:37 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:41 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:41 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:45 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:45 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:47 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:47 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:48 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:48 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:49 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:49 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:56 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:56 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:07:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:07:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:01 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:01 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:04 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:04 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:10 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:10 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:12 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:12 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:14 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:14 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:23 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
2011-09-22 14:08:23 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 16, Array)
#1 [internal function]: CMS3\Engine\Controller_App->action_call()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#3 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#4 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#6 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#7 {main}
2011-09-22 14:08:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:29 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:29 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:08:30 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:08:30 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:24 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:24 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:26 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
2011-09-22 14:09:26 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 16, Array)
#1 [internal function]: CMS3\Engine\Controller_App->action_call()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#3 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#4 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#6 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#7 {main}
2011-09-22 14:09:27 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:27 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:32 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:32 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:46 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:46 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:49 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:49 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:57 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:57 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:09:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:09:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:10:01 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:10:01 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:10:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:10:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:10:04 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:10:04 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:10:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:10:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:11:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:11:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:11:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:11:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:11:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:11:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:11:55 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:11:55 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:11:57 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:11:57 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:11:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:11:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:01 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:01 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:41 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:41 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:43 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:43 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:45 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:45 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:46 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:46 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:12:48 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:12:48 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:13:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:13:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:13:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:13:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:13:19 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:13:19 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:13:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:13:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:13:46 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:13:46 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:13:48 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:13:48 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:13:49 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:13:49 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:13:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:13:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:13:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:13:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:13:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:13:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:14:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:14:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:14:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:14:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:14:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:14:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:14:27 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:14:27 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:14:28 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:14:28 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:14:29 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:14:29 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:14:36 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:14:36 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:15:07 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH\cms3\engine\classes\cache.php [ 5 ]
2011-09-22 14:15:07 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH\cms3\engine\classes\cache.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 14:15:07 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH\cms3\engine\classes\cache.php [ 5 ]
2011-09-22 14:15:07 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH\cms3\engine\classes\cache.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 14:15:17 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH\cms3\engine\classes\cache.php [ 5 ]
2011-09-22 14:15:17 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH\cms3\engine\classes\cache.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 14:15:17 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH\cms3\engine\classes\cache.php [ 5 ]
2011-09-22 14:15:17 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH\cms3\engine\classes\cache.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 14:16:20 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\Cache' not found ~ MODPATH\cms3\engine\classes\app.php [ 191 ]
2011-09-22 14:16:20 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\Cache' not found ~ MODPATH\cms3\engine\classes\app.php [ 191 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 14:16:20 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\Cache' not found ~ MODPATH\cms3\engine\classes\app.php [ 191 ]
2011-09-22 14:16:20 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\Cache' not found ~ MODPATH\cms3\engine\classes\app.php [ 191 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 14:17:04 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH\cms3\engine\classes\controller.php [ 56 ]
2011-09-22 14:17:04 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH\cms3\engine\classes\controller.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 14:17:04 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:17:04 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:17:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:17:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:17:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:17:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:17:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:17:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:18:05 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:18:05 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:18:06 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
2011-09-22 14:18:06 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 16, Array)
#1 [internal function]: CMS3\Engine\Controller_App->action_call()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#3 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#4 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#6 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#7 {main}
2011-09-22 14:18:06 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:18:06 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:18:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:18:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:19:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:19:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:20:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:20:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:21:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:21:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:21:41 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:21:41 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:22:55 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:22:55 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:23:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:23:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:23:33 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:23:33 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:26:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:26:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:26:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:26:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:26:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:26:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:26:05 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:26:05 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:26:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:26:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:26:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:26:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:26:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:26:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:26:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:26:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:26:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:26:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:28:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:28:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:29:01 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:29:01 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:29:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:29:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:29:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:29:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:29:48 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:29:48 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:29:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:29:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:29:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:29:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:29:55 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:29:55 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:30:05 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:30:05 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:30:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:30:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:30:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:30:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:30:15 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:30:15 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:30:17 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:30:17 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:30:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:30:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:31:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:31:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:33:17 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:33:17 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:33:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:33:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:37:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:37:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:51:57 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:51:57 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:51:59 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\HTTP_Exception_404' not found ~ MODPATH\cms3\engine\classes\app.php [ 355 ]
2011-09-22 14:51:59 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\HTTP_Exception_404' not found ~ MODPATH\cms3\engine\classes\app.php [ 355 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 14:51:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:51:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:52:36 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\HTTP_Exception_404' not found ~ MODPATH\cms3\engine\classes\app.php [ 355 ]
2011-09-22 14:52:36 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\HTTP_Exception_404' not found ~ MODPATH\cms3\engine\classes\app.php [ 355 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 14:52:37 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:52:37 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:52:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:52:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:52:38 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\HTTP_Exception_404' not found ~ MODPATH\cms3\engine\classes\app.php [ 355 ]
2011-09-22 14:52:38 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\HTTP_Exception_404' not found ~ MODPATH\cms3\engine\classes\app.php [ 355 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 14:52:39 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:52:39 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:52:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:52:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:52:41 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:52:41 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:52:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:52:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:52:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:52:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:52:55 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:52:55 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:52:56 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:52:56 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:53:19 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:53:19 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 14:53:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:53:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 14:53:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 14:53:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 16:02:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:02:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 16:04:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '*' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 95 ]
2011-09-22 16:04:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '*' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 95 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 16:04:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:04:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 16:05:14 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:05:14 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 16:05:30 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:05:30 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 16:05:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:05:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 16:11:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:11:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 16:12:05 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:12:05 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 16:48:17 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:48:17 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 16:48:39 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:48:39 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 16:49:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:49:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 16:50:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 16:50:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:07:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:07:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:09:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 86 ]
2011-09-22 17:09:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 17:09:48 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:09:48 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:10:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 86 ]
2011-09-22 17:10:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 17:10:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:10:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:10:27 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:10:27 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:11:34 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:11:34 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:13:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:13:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:14:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:14:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:14:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: items ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 83 ]
2011-09-22 17:14:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: items ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 83 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(83): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms3\ww...', 83, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<?php??use \CMS...', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#4 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#6 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#7 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(27): Kohana_View->__toString()
#8 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#9 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#14 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#16 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#17 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#18 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#19 [internal function]: CMS3\Engine\Controller_App->action_display()
#20 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#21 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#22 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#23 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#24 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#25 {main}
2011-09-22 17:14:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:14:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:15:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:15:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:15:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:15:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:16:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:16:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:16:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:16:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:17:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:17:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:17:12 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:17:12 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:17:28 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:17:28 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:21:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:21:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:22:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY ~ MODPATH\cms3\content\classes\model\item.php [ 29 ]
2011-09-22 17:22:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY ~ MODPATH\cms3\content\classes\model\item.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 17:22:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:22:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:22:46 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:22:46 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:24:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH\cms3\content\classes\model\item.php [ 36 ]
2011-09-22 17:24:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH\cms3\content\classes\model\item.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 17:24:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:24:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:25:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH\cms3\content\classes\model\item.php [ 36 ]
2011-09-22 17:25:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH\cms3\content\classes\model\item.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 17:25:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:25:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:25:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH\cms3\content\classes\model\item.php [ 36 ]
2011-09-22 17:25:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ MODPATH\cms3\content\classes\model\item.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 17:25:10 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:25:10 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 17:25:41 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:25:41 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 17:27:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 17:27:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 18:14:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 18:14:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 18:14:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 18:14:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 18:15:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 18:15:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 18:16:06 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 18:16:06 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 18:16:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 18:16:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 18:16:31 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 18:16:31 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 18:16:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 18:16:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 18:16:56 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 18:16:56 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 19:17:06 --- ERROR: ErrorException [ 8 ]: Undefined index: template ~ MODPATH\cms3\engine\classes\renderer\block.php [ 26 ]
2011-09-22 19:17:06 --- STRACE: ErrorException [ 8 ]: Undefined index: template ~ MODPATH\cms3\engine\classes\renderer\block.php [ 26 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms3\ww...', 26, Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#4 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#6 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#7 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#8 [internal function]: CMS3\Engine\Controller_App->action_display()
#9 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#10 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#11 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#12 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#13 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#14 {main}
2011-09-22 19:17:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:17:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 19:17:49 --- ERROR: CMS3\Engine\Exception [ 0 ]: Menu ID doesn't set ~ MODPATH\cms3\menu\classes\controller.php [ 16 ]
2011-09-22 19:17:49 --- STRACE: CMS3\Engine\Exception [ 0 ]: Menu ID doesn't set ~ MODPATH\cms3\menu\classes\controller.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\Menu\Controller->action_display(Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(51): CMS3\Engine\Controller->display('', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(23): CMS3\Engine\Renderer_Block->get_action_output('cms3\menu', Array, '')
#4 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#7 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#8 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#9 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#11 [internal function]: CMS3\Engine\Controller_App->action_display()
#12 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#13 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#14 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#15 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#16 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#17 {main}
2011-09-22 19:17:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:17:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 19:18:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:18:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 19:18:47 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH\cms3\engine\classes\renderer\block.php [ 22 ]
2011-09-22 19:18:47 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ MODPATH\cms3\engine\classes\renderer\block.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-22 19:18:47 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:18:47 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 19:20:04 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:20:04 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 19:23:28 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:23:28 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 19:24:06 --- ERROR: ErrorException [ 8 ]: Undefined property: CMS3\Template\Engine_Native::$block_id ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 5 ]
2011-09-22 19:24:06 --- STRACE: ErrorException [ 8 ]: Undefined property: CMS3\Template\Engine_Native::$block_id ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 5 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(5): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\cms3\ww...', 5, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<?php??use \CMS...', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#4 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#6 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#7 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(32): Kohana_View->__toString()
#8 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#9 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(51): CMS3\Engine\Controller->display('', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(23): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#14 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#16 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#17 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#18 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#19 [internal function]: CMS3\Engine\Controller_App->action_display()
#20 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#21 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#22 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#23 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#24 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#25 {main}
2011-09-22 19:24:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:24:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 19:24:38 --- ERROR: ErrorException [ 8 ]: Undefined property: CMS3\Template\Engine_Native::$block_id ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 5 ]
2011-09-22 19:24:38 --- STRACE: ErrorException [ 8 ]: Undefined property: CMS3\Template\Engine_Native::$block_id ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 5 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(5): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\cms3\ww...', 5, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<?php??use \CMS...', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#4 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#6 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#7 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(32): Kohana_View->__toString()
#8 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#9 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(51): CMS3\Engine\Controller->display('', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(23): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#14 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#16 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#17 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#18 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#19 [internal function]: CMS3\Engine\Controller_App->action_display()
#20 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#21 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#22 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#23 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#24 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#25 {main}
2011-09-22 19:24:39 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:24:39 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 19:25:07 --- ERROR: ErrorException [ 8 ]: Undefined property: CMS3\Template\Engine_Native::$block_id ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 5 ]
2011-09-22 19:25:07 --- STRACE: ErrorException [ 8 ]: Undefined property: CMS3\Template\Engine_Native::$block_id ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 5 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(5): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\cms3\ww...', 5, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<?php??use \CMS...', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#4 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#6 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#7 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(32): Kohana_View->__toString()
#8 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#9 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(51): CMS3\Engine\Controller->display('', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(23): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#14 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#16 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#17 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#18 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#19 [internal function]: CMS3\Engine\Controller_App->action_display()
#20 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#21 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#22 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#23 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#24 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#25 {main}
2011-09-22 19:25:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:25:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(333): CMS3\Engine\Document::factory('ico')
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-09-22 19:25:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:25:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 19:25:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:25:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-22 19:26:06 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-22 19:26:06 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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