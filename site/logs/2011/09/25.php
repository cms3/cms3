<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-25 11:33:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 11:33:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 13:27:33 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 13:27:33 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 13:28:49 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
2011-09-25 13:28:49 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 16, Array)
#1 [internal function]: CMS3\Engine\Controller_App->action_call()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#3 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#4 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#6 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#7 {main}
2011-09-25 13:28:49 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 13:28:49 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 13:30:14 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
2011-09-25 13:30:14 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 16, Array)
#1 [internal function]: CMS3\Engine\Controller_App->action_call()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#3 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#4 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#6 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#7 {main}
2011-09-25 13:30:15 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 13:30:15 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:05:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:05:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:05:57 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:05:57 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:17:45 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:17:45 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:19:24 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:19:24 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:20:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:20:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:21:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:21:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:21:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:21:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:22:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:22:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:23:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:23:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:25:30 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:25:30 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:26:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:26:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:27:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:27:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:28:06 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:28:06 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:33:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:33:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:35:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:35:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:35:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:35:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:36:12 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:36:12 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:36:34 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:36:34 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:37:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:37:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 15:37:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 15:37:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 16:37:02 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
2011-09-25 16:37:02 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 16, Array)
#1 [internal function]: CMS3\Engine\Controller_App->action_call()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#3 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#4 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#6 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#7 {main}
2011-09-25 16:37:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 16:37:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 16:37:05 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
2011-09-25 16:37:05 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 16, Array)
#1 [internal function]: CMS3\Engine\Controller_App->action_call()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#3 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#4 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#6 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#7 {main}
2011-09-25 16:37:05 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 16:37:05 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-25 16:37:06 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
2011-09-25 16:37:06 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Controller_App::action_call() ~ MODPATH\cms3\engine\classes\controller\app.php [ 16 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 16, Array)
#1 [internal function]: CMS3\Engine\Controller_App->action_call()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#3 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#4 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#5 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#6 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#7 {main}
2011-09-25 16:37:06 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-25 16:37:06 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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