<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-03 10:25:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method CMS3\Engine\Request::params() ~ MODPATH\cms3\engine\classes\app.php [ 241 ]
2011-08-03 10:25:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method CMS3\Engine\Request::params() ~ MODPATH\cms3\engine\classes\app.php [ 241 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-03 10:25:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 10:25:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(221): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 10:25:32 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 10:25:32 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(221): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 10:25:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 10:25:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(221): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 10:25:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 10:25:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(221): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 10:25:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 10:25:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(221): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 10:27:31 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 10:27:31 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(221): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 14:11:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 14:11:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(231): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 14:58:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_RETURN, expecting T_FUNCTION ~ MODPATH\cms3\engine\classes\app.php [ 44 ]
2011-08-03 14:58:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_RETURN, expecting T_FUNCTION ~ MODPATH\cms3\engine\classes\app.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-03 14:58:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_RETURN, expecting T_FUNCTION ~ MODPATH\cms3\engine\classes\app.php [ 44 ]
2011-08-03 14:58:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_RETURN, expecting T_FUNCTION ~ MODPATH\cms3\engine\classes\app.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-03 15:09:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\cms3\engine\classes\app.php [ 73 ]
2011-08-03 15:09:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\cms3\engine\classes\app.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-03 15:09:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\cms3\engine\classes\app.php [ 73 ]
2011-08-03 15:09:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ MODPATH\cms3\engine\classes\app.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-08-03 16:39:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 16:39:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:01:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:01:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:06:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:06:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:16:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:16:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:16:33 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:16:33 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:16:33 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:16:33 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:16:34 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:16:34 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:16:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:16:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:16:35 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:16:35 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:16:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:16:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:16:37 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:16:37 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:16:37 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:16:37 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:16:37 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:16:37 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:33:26 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:33:26 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:33:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:33:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:35:04 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:35:04 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:35:04 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:35:04 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:43:11 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:43:11 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:43:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:43:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:47:02 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:47:02 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:47:02 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:47:02 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:47:03 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:47:03 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:47:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:47:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:48:53 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:48:53 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:48:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:48:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:49:00 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:49:00 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:49:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:49:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:49:11 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:49:11 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:49:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:49:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:49:16 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:49:16 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:49:17 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:49:17 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 17:49:41 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 17:49:41 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 17:49:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 17:49:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 18:02:22 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 18:02:22 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 18:02:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 18:02:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 18:16:00 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 18:16:00 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 18:16:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 18:16:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 18:19:03 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 18:19:03 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 18:19:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 18:19:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 18:19:05 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 18:19:05 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 18:19:05 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 18:19:05 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 18:19:07 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 18:19:07 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 18:19:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 18:19:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 18:30:03 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 18:30:03 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 18:30:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 18:30:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-03 18:33:31 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-03 18:33:31 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', 'content/list', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content/list')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content/list', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-03 18:33:32 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-03 18:33:32 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(238): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}