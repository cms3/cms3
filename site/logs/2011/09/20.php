<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-20 14:55:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 14:55:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 14:56:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 14:56:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 15:08:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\cms3\content\classes\model\item.php [ 15 ]
2011-09-20 15:08:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\cms3\content\classes\model\item.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-20 15:08:49 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 15:08:49 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 15:08:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\cms3\content\classes\model\item.php [ 15 ]
2011-09-20 15:08:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ MODPATH\cms3\content\classes\model\item.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-20 15:08:55 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 15:08:55 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 15:09:10 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 15:09:10 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 15:09:12 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 15:09:12 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:27:31 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:27:31 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:28:46 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:28:46 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:28:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:28:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:34:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:34:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:35:37 --- ERROR: ErrorException [ 4096 ]: Object of class CMS3\Engine\Field_Primary could not be converted to string ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 301 ]
2011-09-20 18:35:37 --- STRACE: ErrorException [ 4096 ]: Object of class CMS3\Engine\Field_Primary could not be converted to string ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 301 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(301): Kohana_Core::error_handler(4096, 'Object of class...', 'Z:\home\cms3\ww...', 301, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
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
2011-09-20 18:35:37 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:35:37 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:35:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:35:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:39:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method CMS3\Engine\Field_Primary::get_class() ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 301 ]
2011-09-20 18:39:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method CMS3\Engine\Field_Primary::get_class() ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 301 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-20 18:39:17 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:39:17 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:39:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method CMS3\Engine\Field_Primary::get_class() ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 301 ]
2011-09-20 18:39:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method CMS3\Engine\Field_Primary::get_class() ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 301 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-20 18:39:57 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:39:57 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:40:10 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:40:10 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:41:25 --- ERROR: ErrorException [ 2 ]: Attempt to modify property of non-object ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 302 ]
2011-09-20 18:41:25 --- STRACE: ErrorException [ 2 ]: Attempt to modify property of non-object ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 302 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(302): Kohana_Core::error_handler(2, 'Attempt to modi...', 'Z:\home\cms3\ww...', 302, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
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
2011-09-20 18:41:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:41:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:41:55 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:41:55 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:42:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:42:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:43:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:43:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:46:17 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:46:17 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 18:48:14 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 18:48:14 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:01:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:01:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:02:10 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:02:10 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:06:08 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for CMS3\Engine\NS::remove_class_prefix(), called in Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code on line 304 and defined ~ MODPATH\cms3\engine\classes\ns.php [ 101 ]
2011-09-20 19:06:08 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for CMS3\Engine\NS::remove_class_prefix(), called in Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code on line 304 and defined ~ MODPATH\cms3\engine\classes\ns.php [ 101 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\ns.php(101): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 101, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(304): CMS3\Engine\NS::remove_class_prefix('Field_Primary')
#2 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
#4 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#7 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#8 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(27): Kohana_View->__toString()
#9 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#13 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#14 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#16 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#17 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#18 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#19 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#20 [internal function]: CMS3\Engine\Controller_App->action_display()
#21 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#22 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#23 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#24 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#25 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#26 {main}
2011-09-20 19:06:10 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:06:10 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:06:18 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for CMS3\Engine\NS::remove_class_prefix(), called in Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code on line 304 and defined ~ MODPATH\cms3\engine\classes\ns.php [ 101 ]
2011-09-20 19:06:18 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for CMS3\Engine\NS::remove_class_prefix(), called in Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code on line 304 and defined ~ MODPATH\cms3\engine\classes\ns.php [ 101 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\ns.php(101): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 101, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(304): CMS3\Engine\NS::remove_class_prefix('Field_Primary')
#2 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
#4 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#7 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#8 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(27): Kohana_View->__toString()
#9 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#13 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#14 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#16 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#17 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#18 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#19 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#20 [internal function]: CMS3\Engine\Controller_App->action_display()
#21 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#22 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#23 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#24 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#25 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#26 {main}
2011-09-20 19:06:19 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:06:19 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:07:48 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:07:48 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:09:31 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:09:31 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:09:57 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:09:57 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:24:20 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for JSON::encode(), called in Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code on line 378 and defined ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 346 ]
2011-09-20 19:24:20 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for JSON::encode(), called in Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code on line 378 and defined ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 346 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(346): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 346, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(378): JSON::encode()
#2 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
#4 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#7 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#8 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(27): Kohana_View->__toString()
#9 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#13 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#14 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#16 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#17 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#18 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#19 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#20 [internal function]: CMS3\Engine\Controller_App->action_display()
#21 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#22 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#23 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#24 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#25 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#26 {main}
2011-09-20 19:24:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:24:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:24:33 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:24:33 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:24:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:24:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:25:42 --- ERROR: ErrorException [ 1 ]: __clone method called on non-object ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 299 ]
2011-09-20 19:25:42 --- STRACE: ErrorException [ 1 ]: __clone method called on non-object ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 299 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-20 19:25:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:25:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:25:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 299 ]
2011-09-20 19:25:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 299 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(299): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms3\ww...', 299, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
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
2011-09-20 19:25:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:25:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:26:07 --- ERROR: ErrorException [ 2048 ]: Only variables should be assigned by reference ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 299 ]
2011-09-20 19:26:07 --- STRACE: ErrorException [ 2048 ]: Only variables should be assigned by reference ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 299 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(299): Kohana_Core::error_handler(2048, 'Only variables ...', 'Z:\home\cms3\ww...', 299, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
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
2011-09-20 19:26:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:26:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:31:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:31:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:31:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:31:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:31:32 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:31:32 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:31:41 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:31:41 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:32:32 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:32:32 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:33:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:33:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:33:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:33:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:33:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:33:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:34:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:34:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:35:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:35:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:39:17 --- ERROR: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 354 ]
2011-09-20 19:39:17 --- STRACE: ErrorException [ 2 ]: get_object_vars() expects parameter 1 to be object, array given ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 354 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'get_object_vars...', 'Z:\home\cms3\ww...', 354, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(354): get_object_vars(Array)
#2 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(371): JSON::encode(Array)
#3 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#4 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#7 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#8 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#9 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(27): Kohana_View->__toString()
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#14 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#16 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#17 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#18 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#19 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#20 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#21 [internal function]: CMS3\Engine\Controller_App->action_display()
#22 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#23 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#24 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#25 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#26 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#27 {main}
2011-09-20 19:39:17 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:39:17 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:40:45 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:40:45 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:42:12 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:42:12 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:42:43 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:42:43 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:43:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:43:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:45:34 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:45:34 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:46:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:46:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:46:29 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:46:29 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:46:41 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:46:41 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:46:43 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:46:43 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:47:28 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:47:28 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:47:47 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:47:47 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:47:57 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:47:57 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:50:14 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 358 ]
2011-09-20 19:50:14 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 358 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(358): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\cms3\ww...', 358, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(377): JSON::encode(Array, Array)
#2 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#3 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
#4 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#7 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#8 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(27): Kohana_View->__toString()
#9 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#13 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#14 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#16 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#17 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#18 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#19 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#20 [internal function]: CMS3\Engine\Controller_App->action_display()
#21 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#22 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#23 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#24 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#25 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#26 {main}
2011-09-20 19:50:14 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:50:14 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:51:08 --- ERROR: ErrorException [ 8 ]: Use of undefined constant camelize - assumed 'camelize' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 352 ]
2011-09-20 19:51:08 --- STRACE: ErrorException [ 8 ]: Use of undefined constant camelize - assumed 'camelize' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 352 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(352): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\cms3\ww...', 352, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(364): JSON::encode(Object(CMS3\Engine\Field_Primary))
#2 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(379): JSON::encode(Array, Array)
#3 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#4 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#7 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#8 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#9 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(27): Kohana_View->__toString()
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#14 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#16 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#17 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#18 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#19 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#20 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#21 [internal function]: CMS3\Engine\Controller_App->action_display()
#22 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#23 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#24 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#25 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#26 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#27 {main}
2011-09-20 19:51:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:51:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:51:37 --- ERROR: ErrorException [ 8 ]: Use of undefined constant camelize - assumed 'camelize' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 352 ]
2011-09-20 19:51:37 --- STRACE: ErrorException [ 8 ]: Use of undefined constant camelize - assumed 'camelize' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 352 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(352): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\cms3\ww...', 352, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(364): JSON::encode(Object(CMS3\Engine\Field_Primary))
#2 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(379): JSON::encode(Array, Array)
#3 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#4 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#7 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#8 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#9 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(27): Kohana_View->__toString()
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#14 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#16 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#17 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#18 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#19 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#20 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#21 [internal function]: CMS3\Engine\Controller_App->action_display()
#22 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#23 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#24 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#25 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#26 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#27 {main}
2011-09-20 19:51:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:51:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:52:16 --- ERROR: ErrorException [ 8 ]: Use of undefined constant camelize - assumed 'camelize' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 352 ]
2011-09-20 19:52:16 --- STRACE: ErrorException [ 8 ]: Use of undefined constant camelize - assumed 'camelize' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 352 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(352): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\cms3\ww...', 352, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(364): JSON::encode(Object(CMS3\Engine\Field_Primary))
#2 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(379): JSON::encode(Array, Array)
#3 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#4 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#7 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#8 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#9 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(27): Kohana_View->__toString()
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#14 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#16 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#17 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#18 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#19 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#20 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#21 [internal function]: CMS3\Engine\Controller_App->action_display()
#22 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#23 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#24 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#25 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#26 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#27 {main}
2011-09-20 19:52:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:52:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:52:17 --- ERROR: ErrorException [ 8 ]: Use of undefined constant camelize - assumed 'camelize' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 352 ]
2011-09-20 19:52:17 --- STRACE: ErrorException [ 8 ]: Use of undefined constant camelize - assumed 'camelize' ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 352 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(352): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\cms3\ww...', 352, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(364): JSON::encode(Object(CMS3\Engine\Field_Primary))
#2 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(379): JSON::encode(Array, Array)
#3 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#4 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<script id="gri...', Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#7 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#8 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#9 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(27): Kohana_View->__toString()
#10 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(49): CMS3\Engine\Controller->display('', Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#14 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#16 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#17 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#18 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#19 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(361): CMS3\Engine\Document->render()
#20 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#21 [internal function]: CMS3\Engine\Controller_App->action_display()
#22 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#23 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#24 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#25 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#26 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#27 {main}
2011-09-20 19:52:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:52:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:52:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:52:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:53:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 361 ]
2011-09-20 19:53:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 361 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-20 19:53:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:53:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:53:14 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:53:14 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:53:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:53:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:53:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:53:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:54:29 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:54:29 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-09-20 19:55:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-09-20 19:55:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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