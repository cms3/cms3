<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-06 11:08:10 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-06 11:08:10 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 11:08:10 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 11:08:10 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:22:09 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-06 13:22:09 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:22:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:22:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:22:38 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-06 13:22:38 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:22:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:22:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:23:40 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:23:40 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:23:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:23:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:24:08 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:24:08 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:24:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:24:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:24:09 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:24:09 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:24:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:24:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:25:31 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:25:31 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:25:31 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:25:31 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:27:13 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:27:13 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:27:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:27:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:28:25 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:28:25 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:28:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:28:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:28:26 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:28:26 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:28:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:28:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:28:45 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:28:45 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:28:45 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:28:45 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:28:46 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:28:46 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:28:46 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:28:46 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:28:47 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:28:47 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:28:47 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:28:47 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:32:21 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-06 13:32:21 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 392, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(392): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:32:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:32:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:32:25 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-06 13:32:25 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:32:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:32:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:33:08 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-06 13:33:08 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:33:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:33:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:34:45 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-06 13:34:45 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:34:45 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:34:45 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 13:54:15 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-06 13:54:15 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 13:54:15 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 13:54:15 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 14:09:31 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-06 14:09:31 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 14:09:31 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 14:09:31 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 14:10:18 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 14:10:18 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 14:10:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 14:10:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 14:10:43 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 14:10:43 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 14:10:43 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 14:10:43 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 14:11:43 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 14:11:43 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 14:11:43 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 14:11:43 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 14:11:44 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 14:11:44 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 14:11:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 14:11:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 14:13:03 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 14:13:03 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 14:13:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 14:13:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 14:17:00 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 14:17:00 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 14:17:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 14:17:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 16:21:16 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 16:21:16 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 16:21:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 16:21:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 16:22:15 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 16:22:15 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 16:22:15 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 16:22:15 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 16:23:39 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
2011-08-06 16:23:39 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Data\Sites\h...', 82, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(278): CMS3\Engine\Request->__construct('', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(9): CMS3\Engine\Request::factory()
#3 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#4 {main}
2011-08-06 16:23:39 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
2011-08-06 16:23:39 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Data\Sites\h...', 82, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(278): CMS3\Engine\Request->__construct('/favicon.ico', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(9): CMS3\Engine\Request::factory()
#3 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#4 {main}
2011-08-06 16:23:40 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
2011-08-06 16:23:40 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Data\Sites\h...', 82, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(278): CMS3\Engine\Request->__construct('', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(9): CMS3\Engine\Request::factory()
#3 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#4 {main}
2011-08-06 16:23:40 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
2011-08-06 16:23:40 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Data\Sites\h...', 82, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(278): CMS3\Engine\Request->__construct('/favicon.ico', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(9): CMS3\Engine\Request::factory()
#3 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#4 {main}
2011-08-06 16:23:41 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
2011-08-06 16:23:41 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Data\Sites\h...', 82, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(278): CMS3\Engine\Request->__construct('', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(9): CMS3\Engine\Request::factory()
#3 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#4 {main}
2011-08-06 16:23:41 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
2011-08-06 16:23:41 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Data\Sites\h...', 82, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(278): CMS3\Engine\Request->__construct('/favicon.ico', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(9): CMS3\Engine\Request::factory()
#3 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#4 {main}
2011-08-06 16:23:48 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 16:23:48 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 16:23:48 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 16:23:48 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 16:23:59 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
2011-08-06 16:23:59 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Data\Sites\h...', 82, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(278): CMS3\Engine\Request->__construct('', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(9): CMS3\Engine\Request::factory()
#3 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#4 {main}
2011-08-06 16:23:59 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
2011-08-06 16:23:59 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ MODPATH\cms3\engine\classes\request.php [ 82 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(82): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\Data\Sites\h...', 82, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request.php(278): CMS3\Engine\Request->__construct('/favicon.ico', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(9): CMS3\Engine\Request::factory()
#3 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#4 {main}
2011-08-06 16:24:05 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 16:24:05 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 16:24:05 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 16:24:05 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 16:40:18 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-06 16:40:18 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', '', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-06 16:40:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 16:40:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 18:53:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 18:53:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 18:54:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 18:54:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 18:54:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 18:54:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-06 18:54:39 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-06 18:54:39 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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