<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-08-04 12:56:19 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-04 12:56:19 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
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
2011-08-04 12:56:19 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 12:56:19 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 13:03:37 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-08-04 13:03:37 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 392 ]
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
2011-08-04 13:03:38 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 13:03:38 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 13:04:08 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
2011-08-04 13:04:08 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 393, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(393): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 13:04:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 13:04:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 13:04:20 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
2011-08-04 13:04:20 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 393, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(393): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 13:04:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 13:04:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 13:04:53 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
2011-08-04 13:04:53 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 393, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(393): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 13:04:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 13:04:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 13:09:07 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 13:09:07 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 13:09:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 13:09:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 13:26:42 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
2011-08-04 13:26:42 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 393, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(393): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 13:26:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 13:26:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 13:45:55 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
2011-08-04 13:45:55 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 393, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(393): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 13:45:56 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 13:45:56 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 14:22:07 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
2011-08-04 14:22:07 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 393, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(393): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 14:22:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 14:22:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 14:46:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: expressio ~ SYSPATH\classes\kohana\route.php [ 235 ]
2011-08-04 14:46:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: expressio ~ SYSPATH\classes\kohana\route.php [ 235 ]
--
#0 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(235): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Data\Sites\h...', 235, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(335): Kohana_Route::compile('action/<call_pa...', Array)
#2 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(90): Kohana_Route->__construct('action/<call_pa...', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(122): Kohana_Route::set('action', 'action/<call_pa...', Array)
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(92): CMS3\Engine\App->_set_default_routes()
#5 D:\Data\Sites\home\cms3\www\cms3.init.php(101): CMS3\Engine\App->initialize()
#6 D:\Data\Sites\home\cms3\www\index.php(101): require('D:\Data\Sites\h...')
#7 {main}
2011-08-04 14:46:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: expressio ~ SYSPATH\classes\kohana\route.php [ 235 ]
2011-08-04 14:46:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: expressio ~ SYSPATH\classes\kohana\route.php [ 235 ]
--
#0 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(235): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Data\Sites\h...', 235, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(335): Kohana_Route::compile('action/<call_pa...', Array)
#2 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(90): Kohana_Route->__construct('action/<call_pa...', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(122): Kohana_Route::set('action', 'action/<call_pa...', Array)
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(92): CMS3\Engine\App->_set_default_routes()
#5 D:\Data\Sites\home\cms3\www\cms3.init.php(101): CMS3\Engine\App->initialize()
#6 D:\Data\Sites\home\cms3\www\index.php(101): require('D:\Data\Sites\h...')
#7 {main}
2011-08-04 14:46:30 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-04 14:46:30 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 14:46:30 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 14:46:30 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 14:46:47 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 14:46:47 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 14:46:47 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 14:46:47 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 14:48:25 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 14:48:25 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 14:48:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 14:48:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 15:22:19 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 15:22:19 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 15:22:19 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 15:22:19 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 15:23:24 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 15:23:24 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(247): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 15:23:24 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 15:23:24 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(239): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-04 15:28:55 --- ERROR: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Compilation failed: POSIX collating elements are not supported at offset 2 ~ MODPATH\cms3\engine\classes\app.php [ 184 ]
2011-08-04 15:28:55 --- STRACE: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Compilation failed: POSIX collating elements are not supported at offset 2 ~ MODPATH\cms3\engine\classes\app.php [ 184 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match_all(...', 'D:\Data\Sites\h...', 184, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(184): preg_match_all('/<([.\.]+?):(.+...', 'shop(/<shop_pat...', NULL, 2)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(97): CMS3\Engine\App->_replace_inline_route('shop(/<shop_pat...')
#3 D:\Data\Sites\home\cms3\www\cms3.init.php(101): CMS3\Engine\App->initialize()
#4 D:\Data\Sites\home\cms3\www\index.php(101): require('D:\Data\Sites\h...')
#5 {main}
2011-08-04 15:28:55 --- ERROR: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Compilation failed: POSIX collating elements are not supported at offset 2 ~ MODPATH\cms3\engine\classes\app.php [ 184 ]
2011-08-04 15:28:55 --- STRACE: ErrorException [ 2 ]: preg_match_all() [function.preg-match-all]: Compilation failed: POSIX collating elements are not supported at offset 2 ~ MODPATH\cms3\engine\classes\app.php [ 184 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match_all(...', 'D:\Data\Sites\h...', 184, Array)
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(184): preg_match_all('/<([.\.]+?):(.+...', 'shop(/<shop_pat...', NULL, 2)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(97): CMS3\Engine\App->_replace_inline_route('shop(/<shop_pat...')
#3 D:\Data\Sites\home\cms3\www\cms3.init.php(101): CMS3\Engine\App->initialize()
#4 D:\Data\Sites\home\cms3\www\index.php(101): require('D:\Data\Sites\h...')
#5 {main}
2011-08-04 16:17:05 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 16:17:05 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(247): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 16:17:05 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 16:17:05 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(239): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-04 16:21:11 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 16:21:11 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(247): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 16:21:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 16:21:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(239): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-04 16:23:36 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-04 16:23:36 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(247): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 16:23:36 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 16:23:36 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
--
#0 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(239): CMS3\Engine\Document::factory('ico')
#1 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('favicon', 'ru_RU', 'ico')
#2 [internal function]: CMS3\Engine\Controller_App->action_display()
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#4 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#5 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#6 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#7 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#8 {main}
2011-08-04 16:23:49 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
2011-08-04 16:23:49 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 395 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 395, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(395): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 16:23:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 16:23:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 16:24:50 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
2011-08-04 16:24:50 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 393, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(393): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 16:24:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 16:24:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 16:34:22 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
2011-08-04 16:34:22 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 393 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 393, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(393): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 16:34:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 16:34:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 16:35:38 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 16:35:38 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 16:35:39 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 16:35:39 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 16:36:03 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 16:36:03 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 16:36:03 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 16:36:03 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 17:34:47 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 17:34:47 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 17:34:47 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 17:34:47 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 17:46:51 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 17:46:51 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 17:46:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 17:46:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 17:52:11 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 17:52:11 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 17:52:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 17:52:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 17:52:35 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 17:52:35 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 17:52:36 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 17:52:36 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 17:53:18 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 17:53:18 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 17:53:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 17:53:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 17:53:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: expression ~ SYSPATH\classes\kohana\route.php [ 221 ]
2011-08-04 17:53:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: expression ~ SYSPATH\classes\kohana\route.php [ 221 ]
--
#0 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(221): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Data\Sites\h...', 221, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(334): Kohana_Route::compile('action/<call_pa...', Array)
#2 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(90): Kohana_Route->__construct('action/<call_pa...', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(122): Kohana_Route::set('action', 'action/<call_pa...', Array)
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(92): CMS3\Engine\App->_set_default_routes()
#5 D:\Data\Sites\home\cms3\www\cms3.init.php(101): CMS3\Engine\App->initialize()
#6 D:\Data\Sites\home\cms3\www\index.php(101): require('D:\Data\Sites\h...')
#7 {main}
2011-08-04 17:53:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: expression ~ SYSPATH\classes\kohana\route.php [ 221 ]
2011-08-04 17:53:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: expression ~ SYSPATH\classes\kohana\route.php [ 221 ]
--
#0 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(221): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\Data\Sites\h...', 221, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(334): Kohana_Route::compile('action/<call_pa...', Array)
#2 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(90): Kohana_Route->__construct('action/<call_pa...', Array)
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(122): Kohana_Route::set('action', 'action/<call_pa...', Array)
#4 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(92): CMS3\Engine\App->_set_default_routes()
#5 D:\Data\Sites\home\cms3\www\cms3.init.php(101): CMS3\Engine\App->initialize()
#6 D:\Data\Sites\home\cms3\www\index.php(101): require('D:\Data\Sites\h...')
#7 {main}
2011-08-04 17:53:35 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 17:53:35 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 17:53:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 17:53:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 18:10:32 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 18:10:32 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 18:10:32 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 18:10:32 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 18:15:15 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 18:15:15 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 18:15:15 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 18:15:15 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 18:15:25 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 18:15:25 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 18:15:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 18:15:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 18:15:39 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 18:15:39 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 18:15:39 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 18:15:39 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 18:15:47 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 18:15:47 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 18:15:47 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 18:15:47 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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
2011-08-04 18:32:08 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
2011-08-04 18:32:08 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: syntax error in subpattern name (missing terminator) at offset 23 ~ SYSPATH\classes\kohana\route.php [ 394 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\Data\Sites\h...', 394, Array)
#1 D:\Data\Sites\home\cms3\www\system\classes\kohana\route.php(394): preg_match('#^content(?:/(?...', 'content', NULL)
#2 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\app.php(246): Kohana_Route->matches('content')
#3 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('content', 'ru_RU', 'html')
#4 [internal function]: CMS3\Engine\Controller_App->action_display()
#5 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 D:\Data\Sites\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 D:\Data\Sites\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 D:\Data\Sites\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 D:\Data\Sites\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-08-04 18:32:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
2011-08-04 18:32:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 49 ]
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