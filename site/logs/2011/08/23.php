<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-23 15:01:30 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 15:01:30 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 16:07:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\cms3\engine\classes\orm\builder.php [ 101 ]
2011-08-23 16:07:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\cms3\engine\classes\orm\builder.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 16:07:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\cms3\engine\classes\orm\builder.php [ 101 ]
2011-08-23 16:07:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\cms3\engine\classes\orm\builder.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 16:07:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\cms3\engine\classes\orm\builder.php [ 101 ]
2011-08-23 16:07:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\cms3\engine\classes\orm\builder.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 16:07:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 16:07:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 16:34:04 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\DirectoryIterator' not found ~ MODPATH\cms3\engine\classes\template.php [ 142 ]
2011-08-23 16:34:04 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\DirectoryIterator' not found ~ MODPATH\cms3\engine\classes\template.php [ 142 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 16:34:05 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 16:34:05 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 16:44:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: engine ~ MODPATH\cms3\engine\classes\template.php [ 152 ]
2011-08-23 16:44:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: engine ~ MODPATH\cms3\engine\classes\template.php [ 152 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(152): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Data\Sites\h...', 152, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(123): CMS3\Engine\Template->_detect_engine()
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(70): CMS3\Engine\Template->_load_engine()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(56): CMS3\Engine\Template->load('index')
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(334): CMS3\Engine\Document->render()
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#7 [internal function]: CMS3\Engine\Controller_App->action_display()
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#9 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#10 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#12 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#13 {main}
2011-08-23 16:44:27 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 16:44:27 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 16:44:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 16:44:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:03:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:03:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:27:14 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:27:14 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:27:24 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Content\Function_Wrapper' not found ~ MODPATH\cms3\content\classes\model\item.php [ 63 ]
2011-08-23 18:27:24 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Content\Function_Wrapper' not found ~ MODPATH\cms3\content\classes\model\item.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 18:28:28 --- ERROR: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ MODPATH\cms3\content\classes\model\item.php [ 64 ]
2011-08-23 18:28:28 --- STRACE: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ MODPATH\cms3\content\classes\model\item.php [ 64 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\model\item.php(64): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\Data\Sites\h...', 64, Array)
#1 [internal function]: CMS3\Content\Model_Item::initialize(Object(Jelly_Meta))
#2 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core.php(174): call_user_func(Array, Object(Jelly_Meta))
#3 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core.php(98): Jelly_Core::register('cms3\content\it...')
#4 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\model.php(72): Jelly_Core::meta(Object(CMS3\Content\Model_Item))
#5 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core.php(51): Jelly_Core_Model->__construct(NULL)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\model.php(139): Jelly_Core::factory('cms3\content\it...', NULL)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\admin\classes\controller.php(75): CMS3\Engine\Model::factory('cms3-content-it...')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Admin\Controller->action_display(Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\admin', Array, '')
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<cms3:include r...')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(334): CMS3\Engine\Document->render()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#19 [internal function]: CMS3\Engine\Controller_App->action_display()
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#21 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#22 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#23 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#24 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#25 {main}
2011-08-23 18:28:28 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:28:28 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:28:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting T_PAAMAYIM_NEKUDOTAYIM ~ MODPATH\cms3\content\classes\model\item.php [ 64 ]
2011-08-23 18:28:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting T_PAAMAYIM_NEKUDOTAYIM ~ MODPATH\cms3\content\classes\model\item.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 18:28:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:28:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:29:12 --- ERROR: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ MODPATH\cms3\content\classes\model\item.php [ 64 ]
2011-08-23 18:29:12 --- STRACE: ErrorException [ 8 ]: Use of undefined constant self - assumed 'self' ~ MODPATH\cms3\content\classes\model\item.php [ 64 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\content\classes\model\item.php(64): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\Data\Sites\h...', 64, Array)
#1 [internal function]: CMS3\Content\Model_Item::initialize(Object(Jelly_Meta))
#2 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core.php(174): call_user_func(Array, Object(Jelly_Meta))
#3 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core.php(98): Jelly_Core::register('cms3\content\it...')
#4 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core\model.php(72): Jelly_Core::meta(Object(CMS3\Content\Model_Item))
#5 D:\Data\Sites\home\cms3\www\modules\jelly\classes\jelly\core.php(51): Jelly_Core_Model->__construct(NULL)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\model.php(139): Jelly_Core::factory('cms3\content\it...', NULL)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\admin\classes\controller.php(75): CMS3\Engine\Model::factory('cms3-content-it...')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Admin\Controller->action_display(Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\admin', Array, '')
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<cms3:include r...')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#17 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(334): CMS3\Engine\Document->render()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#19 [internal function]: CMS3\Engine\Controller_App->action_display()
#20 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#21 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#22 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#23 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#24 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#25 {main}
2011-08-23 18:29:12 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:29:12 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:32:27 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:32:27 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:32:36 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\ORM_Field::get_filtration_rules(), called in D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php on line 61 and defined ~ MODPATH\cms3\engine\classes\orm\field.php [ 18 ]
2011-08-23 18:32:36 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\ORM_Field::get_filtration_rules(), called in D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php on line 61 and defined ~ MODPATH\cms3\engine\classes\orm\field.php [ 18 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\field.php(18): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\Data\Sites\h...', 18, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(61): CMS3\Engine\ORM_Field->get_filtration_rules()
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(44): CMS3\Engine\ORM_Builder->_add_param_filter('cms3\content\it...', 'text', '555', 'content_item')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\admin\classes\controller.php(87): CMS3\Engine\ORM_Builder->filter()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Admin\Controller->action_display(Array)
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\admin', Array, '')
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<cms3:include r...')
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(334): CMS3\Engine\Document->render()
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#15 [internal function]: CMS3\Engine\Controller_App->action_display()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#17 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#18 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#19 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#20 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#21 {main}
2011-08-23 18:32:59 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Engine\StdClass' not found ~ MODPATH\cms3\engine\classes\orm\field.php [ 20 ]
2011-08-23 18:32:59 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Engine\StdClass' not found ~ MODPATH\cms3\engine\classes\orm\field.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 18:32:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:32:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:33:19 --- ERROR: ErrorException [ 2048 ]: call_user_func_array() expects parameter 1 to be a valid callback, non-static method CMS3\Content\Model_Item::get_filter_enabled() should not be called statically ~ MODPATH\cms3\engine\classes\function\wrapper.php [ 21 ]
2011-08-23 18:33:19 --- STRACE: ErrorException [ 2048 ]: call_user_func_array() expects parameter 1 to be a valid callback, non-static method CMS3\Content\Model_Item::get_filter_enabled() should not be called statically ~ MODPATH\cms3\engine\classes\function\wrapper.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2048, 'call_user_func_...', 'D:\Data\Sites\h...', 21, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\function\wrapper.php(21): call_user_func_array(Array, Array)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\field.php(28): CMS3\Engine\Function_Wrapper->call()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(61): CMS3\Engine\ORM_Field->get_filtration_rules()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(44): CMS3\Engine\ORM_Builder->_add_param_filter('cms3\content\it...', 'text', '555', 'content_item')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\admin\classes\controller.php(87): CMS3\Engine\ORM_Builder->filter()
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Admin\Controller->action_display(Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\admin', Array, '')
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<cms3:include r...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(334): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-08-23 18:33:19 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:33:19 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:37:51 --- ERROR: ErrorException [ 2048 ]: call_user_func_array() expects parameter 1 to be a valid callback, non-static method CMS3\Content\Model_Item::get_text_default() should not be called statically ~ MODPATH\cms3\engine\classes\function\wrapper.php [ 21 ]
2011-08-23 18:37:51 --- STRACE: ErrorException [ 2048 ]: call_user_func_array() expects parameter 1 to be a valid callback, non-static method CMS3\Content\Model_Item::get_text_default() should not be called statically ~ MODPATH\cms3\engine\classes\function\wrapper.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2048, 'call_user_func_...', 'D:\Data\Sites\h...', 21, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\function\wrapper.php(21): call_user_func_array(Array, Array)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\field.php(37): CMS3\Engine\Function_Wrapper->call()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(61): CMS3\Engine\ORM_Field->get_filtration_rules()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(44): CMS3\Engine\ORM_Builder->_add_param_filter('cms3\content\it...', 'text', '555', 'content_item')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\admin\classes\controller.php(87): CMS3\Engine\ORM_Builder->filter()
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Admin\Controller->action_display(Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\admin', Array, '')
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<cms3:include r...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(334): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-08-23 18:37:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:37:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:38:04 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:38:04 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:38:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:38:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:41:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:41:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:41:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\formo\classes\formo\core\form.php [ 60 ]
2011-08-23 18:41:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\formo\classes\formo\core\form.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 18:42:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:42:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:43:16 --- ERROR: ErrorException [ 2048 ]: call_user_func_array() expects parameter 1 to be a valid callback, non-static method CMS3\Content\Model_Item::get_text_default() should not be called statically ~ MODPATH\cms3\engine\classes\function\wrapper.php [ 21 ]
2011-08-23 18:43:16 --- STRACE: ErrorException [ 2048 ]: call_user_func_array() expects parameter 1 to be a valid callback, non-static method CMS3\Content\Model_Item::get_text_default() should not be called statically ~ MODPATH\cms3\engine\classes\function\wrapper.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2048, 'call_user_func_...', 'D:\Data\Sites\h...', 21, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\function\wrapper.php(21): call_user_func_array(Array, Array)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\field.php(28): CMS3\Engine\Function_Wrapper->call()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(61): CMS3\Engine\ORM_Field->get_filtration_rules()
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\orm\builder.php(44): CMS3\Engine\ORM_Builder->_add_param_filter('cms3\content\it...', 'text', '555', 'content_item')
#5 D:\Data\Sites\home\cms3\www\modules\cms3\admin\classes\controller.php(87): CMS3\Engine\ORM_Builder->filter()
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(26): CMS3\Admin\Controller->action_display(Array)
#7 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller.php(52): CMS3\Engine\Controller->action('display', Array)
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(45): CMS3\Engine\Controller->display('', Array)
#9 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(21): CMS3\Engine\Renderer_Block->get_action_output('cms3\admin', Array, '')
#10 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#11 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#12 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<cms3:include r...')
#13 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#14 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\document.php(69): CMS3\Engine\Template::display('index')
#15 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(334): CMS3\Engine\Document->render()
#16 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#17 [internal function]: CMS3\Engine\Controller_App->action_display()
#18 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#19 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#20 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#21 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#22 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#23 {main}
2011-08-23 18:43:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:43:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:44:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:44:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:44:41 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:44:41 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:45:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:45:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:52:07 --- ERROR: ErrorException [ 1 ]: Class 'CMS3\Content\Wrapper_Method' not found ~ MODPATH\cms3\content\classes\model\item.php [ 64 ]
2011-08-23 18:52:07 --- STRACE: ErrorException [ 1 ]: Class 'CMS3\Content\Wrapper_Method' not found ~ MODPATH\cms3\content\classes\model\item.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-23 18:52:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:52:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:52:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:52:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:52:31 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:52:31 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:52:33 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:52:33 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:52:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:52:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:52:49 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:52:49 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:52:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:52:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:53:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:53:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:54:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:54:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-23 18:54:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-23 18:54:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(306): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}