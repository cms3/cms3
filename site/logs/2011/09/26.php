<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-09-26 15:12:32 --- ERROR: ErrorException [ 8 ]: Undefined index: form ~ MODPATH\cms3\ui_grid\classes\controller.php [ 42 ]
2011-09-26 15:12:32 --- STRACE: ErrorException [ 8 ]: Undefined index: form ~ MODPATH\cms3\ui_grid\classes\controller.php [ 42 ]
--
#0 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(42): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms3\ww...', 42, Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_save(Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(264): CMS3\Engine\Controller->action('save', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(24): CMS3\Engine\App->dispatch_action('cms3\ui_grid\co...', 'save')
#4 [internal function]: CMS3\Engine\Controller_App->action_call()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-09-26 15:12:33 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:12:33 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:12:34 --- ERROR: ErrorException [ 8 ]: Undefined index: form ~ MODPATH\cms3\ui_grid\classes\controller.php [ 42 ]
2011-09-26 15:12:34 --- STRACE: ErrorException [ 8 ]: Undefined index: form ~ MODPATH\cms3\ui_grid\classes\controller.php [ 42 ]
--
#0 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(42): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms3\ww...', 42, Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_save(Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(264): CMS3\Engine\Controller->action('save', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(24): CMS3\Engine\App->dispatch_action('cms3\ui_grid\co...', 'save')
#4 [internal function]: CMS3\Engine\Controller_App->action_call()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-09-26 15:12:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:12:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:13:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:13:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:17:12 --- ERROR: ErrorException [ 8 ]: Undefined index: form ~ MODPATH\cms3\ui_grid\classes\controller.php [ 48 ]
2011-09-26 15:17:12 --- STRACE: ErrorException [ 8 ]: Undefined index: form ~ MODPATH\cms3\ui_grid\classes\controller.php [ 48 ]
--
#0 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms3\ww...', 48, Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_save(Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(264): CMS3\Engine\Controller->action('save', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(24): CMS3\Engine\App->dispatch_action('cms3\ui_grid\co...', 'save')
#4 [internal function]: CMS3\Engine\Controller_App->action_call()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-09-26 15:17:13 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:17:13 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:17:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:17:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:17:47 --- ERROR: ErrorException [ 8 ]: Undefined index: form ~ MODPATH\cms3\ui_grid\classes\controller.php [ 46 ]
2011-09-26 15:17:47 --- STRACE: ErrorException [ 8 ]: Undefined index: form ~ MODPATH\cms3\ui_grid\classes\controller.php [ 46 ]
--
#0 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\cms3\ww...', 46, Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_save(Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(264): CMS3\Engine\Controller->action('save', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(24): CMS3\Engine\App->dispatch_action('cms3\ui_grid\co...', 'save')
#4 [internal function]: CMS3\Engine\Controller_App->action_call()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-09-26 15:17:47 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:17:47 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:18:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Jelly_Validation::getArrayCopy() ~ MODPATH\jelly\classes\jelly\core\validation.php [ 46 ]
2011-09-26 15:18:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Jelly_Validation::getArrayCopy() ~ MODPATH\jelly\classes\jelly\core\validation.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 15:18:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:18:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:20:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Jelly_Validation::getArrayCopy() ~ MODPATH\jelly\classes\jelly\core\validation.php [ 46 ]
2011-09-26 15:20:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Jelly_Validation::getArrayCopy() ~ MODPATH\jelly\classes\jelly\core\validation.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 15:20:04 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:20:04 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:20:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Jelly_Validation::getArrayCopy() ~ MODPATH\jelly\classes\jelly\core\validation.php [ 46 ]
2011-09-26 15:20:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Jelly_Validation::getArrayCopy() ~ MODPATH\jelly\classes\jelly\core\validation.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 15:20:06 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:20:06 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:20:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Jelly_Validation::getArrayCopy() ~ MODPATH\jelly\classes\jelly\core\validation.php [ 46 ]
2011-09-26 15:20:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Jelly_Validation::getArrayCopy() ~ MODPATH\jelly\classes\jelly\core\validation.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 15:20:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:20:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:20:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:20:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:20:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Jelly_Validation::getArrayCopy() ~ MODPATH\jelly\classes\jelly\core\validation.php [ 46 ]
2011-09-26 15:20:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Jelly_Validation::getArrayCopy() ~ MODPATH\jelly\classes\jelly\core\validation.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 15:20:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:20:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:21:50 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:21:50 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:21:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:21:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:22:24 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:22:24 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:22:30 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:22:30 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:22:51 --- ERROR: Database_Exception [ 0 ]: [1054] Unknown column 'text' in 'order clause' ( SELECT `content__items`.`id` AS `id`, `content__items`.`user_id` AS `user`, `content__items`.`state` AS `state` FROM `content__items` AS `content__items` WHERE `content__items`.`state` = '1' GROUP BY `content__items`.`id` ORDER BY `text` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-09-26 15:22:51 --- STRACE: Database_Exception [ 0 ]: [1054] Unknown column 'text' in 'order clause' ( SELECT `content__items`.`id` AS `id`, `content__items`.`user_id` AS `user`, `content__items`.`state` AS `state` FROM `content__items` AS `content__items` WHERE `content__items`.`state` = '1' GROUP BY `content__items`.`id` ORDER BY `text` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
--
#0 Z:\home\cms3\www\modules\database\classes\kohana\database\query.php(225): Kohana_Database_MySQL->query(1, 'SELECT `content...', false, Array)
#1 Z:\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(175): Kohana_Database_Query->execute('default')
#2 Z:\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(129): Jelly_Core_Builder->select_all(NULL)
#3 Z:\home\cms3\www\modules\cms3\ui_grid\classes\model\grid.php(44): Jelly_Core_Builder->select()
#4 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(20): CMS3\UI_Grid\Model_Grid->load()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#7 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(51): CMS3\Engine\Controller->display('', Array)
#8 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(23): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#9 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#12 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(77): CMS3\Engine\Template::display('index')
#14 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(362): CMS3\Engine\Document->render()
#15 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#16 [internal function]: CMS3\Engine\Controller_App->action_display()
#17 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#18 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#19 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#20 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#21 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#22 {main}
2011-09-26 15:22:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:22:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:23:10 --- ERROR: Database_Exception [ 0 ]: [1054] Unknown column 'title' in 'order clause' ( SELECT `content__items`.`id` AS `id`, `content__items`.`user_id` AS `user`, `content__items`.`state` AS `state` FROM `content__items` AS `content__items` WHERE `content__items`.`state` = '1' GROUP BY `content__items`.`id` ORDER BY `title` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-09-26 15:23:10 --- STRACE: Database_Exception [ 0 ]: [1054] Unknown column 'title' in 'order clause' ( SELECT `content__items`.`id` AS `id`, `content__items`.`user_id` AS `user`, `content__items`.`state` AS `state` FROM `content__items` AS `content__items` WHERE `content__items`.`state` = '1' GROUP BY `content__items`.`id` ORDER BY `title` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
--
#0 Z:\home\cms3\www\modules\database\classes\kohana\database\query.php(225): Kohana_Database_MySQL->query(1, 'SELECT `content...', false, Array)
#1 Z:\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(175): Kohana_Database_Query->execute('default')
#2 Z:\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(129): Jelly_Core_Builder->select_all(NULL)
#3 Z:\home\cms3\www\modules\cms3\ui_grid\classes\model\grid.php(44): Jelly_Core_Builder->select()
#4 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(20): CMS3\UI_Grid\Model_Grid->load()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#7 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(51): CMS3\Engine\Controller->display('', Array)
#8 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(23): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#9 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#12 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(77): CMS3\Engine\Template::display('index')
#14 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(362): CMS3\Engine\Document->render()
#15 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#16 [internal function]: CMS3\Engine\Controller_App->action_display()
#17 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#18 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#19 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#20 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#21 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#22 {main}
2011-09-26 15:23:10 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:23:10 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:23:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:23:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:23:49 --- ERROR: Database_Exception [ 0 ]: [1054] Unknown column 'title' in 'order clause' ( SELECT `content__items`.`id` AS `id`, `content__items`.`user_id` AS `user`, `content__items`.`state` AS `state` FROM `content__items` AS `content__items` WHERE `content__items`.`state` = '1' GROUP BY `content__items`.`id` ORDER BY `title` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
2011-09-26 15:23:49 --- STRACE: Database_Exception [ 0 ]: [1054] Unknown column 'title' in 'order clause' ( SELECT `content__items`.`id` AS `id`, `content__items`.`user_id` AS `user`, `content__items`.`state` AS `state` FROM `content__items` AS `content__items` WHERE `content__items`.`state` = '1' GROUP BY `content__items`.`id` ORDER BY `title` ASC ) ~ MODPATH\database\classes\kohana\database\mysql.php [ 181 ]
--
#0 Z:\home\cms3\www\modules\database\classes\kohana\database\query.php(225): Kohana_Database_MySQL->query(1, 'SELECT `content...', false, Array)
#1 Z:\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(175): Kohana_Database_Query->execute('default')
#2 Z:\home\cms3\www\modules\jelly\classes\jelly\core\builder.php(129): Jelly_Core_Builder->select_all(NULL)
#3 Z:\home\cms3\www\modules\cms3\ui_grid\classes\model\grid.php(44): Jelly_Core_Builder->select()
#4 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(20): CMS3\UI_Grid\Model_Grid->load()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#6 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#7 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(51): CMS3\Engine\Controller->display('', Array)
#8 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(23): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#9 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#12 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(77): CMS3\Engine\Template::display('index')
#14 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(362): CMS3\Engine\Document->render()
#15 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-cont...', 'ru_RU', 'html')
#16 [internal function]: CMS3\Engine\Controller_App->action_display()
#17 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#18 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#19 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#20 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#21 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#22 {main}
2011-09-26 15:23:49 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:23:49 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 15:24:37 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 15:24:37 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:07:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\cms3\ui_grid\classes\controller.php [ 55 ]
2011-09-26 16:07:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ MODPATH\cms3\ui_grid\classes\controller.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 16:08:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:08:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:08:28 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:08:28 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:08:36 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:08:36 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:08:44 --- ERROR: ErrorException [ 2 ]: Division by zero ~ MODPATH\cms3\ui_grid\classes\controller.php [ 54 ]
2011-09-26 16:08:44 --- STRACE: ErrorException [ 2 ]: Division by zero ~ MODPATH\cms3\ui_grid\classes\controller.php [ 54 ]
--
#0 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(54): Kohana_Core::error_handler(2, 'Division by zer...', 'Z:\home\cms3\ww...', 54, Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_save(Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(264): CMS3\Engine\Controller->action('save', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(24): CMS3\Engine\App->dispatch_action('cms3\ui_grid\co...', 'save')
#4 [internal function]: CMS3\Engine\Controller_App->action_call()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-09-26 16:08:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:08:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:10:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: ddd ~ MODPATH\cms3\ui_grid\classes\controller.php [ 54 ]
2011-09-26 16:10:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: ddd ~ MODPATH\cms3\ui_grid\classes\controller.php [ 54 ]
--
#0 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms3\ww...', 54, Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_save(Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(264): CMS3\Engine\Controller->action('save', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(24): CMS3\Engine\App->dispatch_action('cms3\ui_grid\co...', 'save')
#4 [internal function]: CMS3\Engine\Controller_App->action_call()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-09-26 16:10:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:10:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:10:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: ddd ~ MODPATH\cms3\ui_grid\classes\controller.php [ 54 ]
2011-09-26 16:10:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: ddd ~ MODPATH\cms3\ui_grid\classes\controller.php [ 54 ]
--
#0 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms3\ww...', 54, Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_save(Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(264): CMS3\Engine\Controller->action('save', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(24): CMS3\Engine\App->dispatch_action('cms3\ui_grid\co...', 'save')
#4 [internal function]: CMS3\Engine\Controller_App->action_call()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-09-26 16:10:40 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:10:40 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:11:01 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:11:01 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:12:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\cms3\ui_grid\classes\controller.php [ 62 ]
2011-09-26 16:12:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\cms3\ui_grid\classes\controller.php [ 62 ]
--
#0 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(62): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\cms3\ww...', 62, Array)
#1 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_save(Array)
#2 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(264): CMS3\Engine\Controller->action('save', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(24): CMS3\Engine\App->dispatch_action('cms3\ui_grid\co...', 'save')
#4 [internal function]: CMS3\Engine\Controller_App->action_call()
#5 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#6 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#7 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#8 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#9 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#10 {main}
2011-09-26 16:12:43 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:12:43 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:13:54 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Model::load(), called in Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php on line 60 and defined ~ MODPATH\cms3\engine\classes\model.php [ 158 ]
2011-09-26 16:13:54 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for CMS3\Engine\Model::load(), called in Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php on line 60 and defined ~ MODPATH\cms3\engine\classes\model.php [ 158 ]
--
#0 Z:\home\cms3\www\modules\cms3\engine\classes\model.php(158): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\cms3\ww...', 158, Array)
#1 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(60): CMS3\Engine\Model->load()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_save(Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(264): CMS3\Engine\Controller->action('save', Array)
#4 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(24): CMS3\Engine\App->dispatch_action('cms3\ui_grid\co...', 'save')
#5 [internal function]: CMS3\Engine\Controller_App->action_call()
#6 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#7 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#8 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#9 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#10 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#11 {main}
2011-09-26 16:13:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:13:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:14:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:14:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:14:58 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:14:58 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:15:00 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:15:00 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:33:43 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:33:43 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:34:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:34:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 16:34:37 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 16:34:37 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 17:00:09 --- ERROR: ErrorException [ 1 ]: Class 'JSON' not found ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 76 ]
2011-09-26 17:00:09 --- STRACE: ErrorException [ 1 ]: Class 'JSON' not found ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-09-26 17:00:09 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 17:00:09 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 17:02:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 17:02:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 17:04:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 17:04:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 17:11:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 17:11:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 17:12:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 17:12:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:05:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 15 ]
2011-09-26 19:05:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: fields ~ MODPATH\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code [ 15 ]
--
#0 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21) : eval()'d code(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\cms3\ww...', 15, Array)
#1 Z:\home\cms3\www\modules\cms3\template_native\classes\@extend\cms3\template\engine\native.php(21): eval()
#2 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(114): CMS3\Template\Engine_Native->render('<?php??use \CMS...', Array)
#3 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#4 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(14): CMS3\Engine\Template::display('cms3\ui_grid\gr...', Array)
#5 Z:\home\cms3\www\modules\cms3\engine\classes\view.php(36): CMS3\Engine\View::capture('cms3\ui_grid\gr...', Array)
#6 Z:\home\cms3\www\system\classes\kohana\view.php(228): CMS3\Engine\View->render()
#7 Z:\home\cms3\www\modules\cms3\ui_grid\classes\controller.php(33): Kohana_View->__toString()
#8 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(27): CMS3\UI_Grid\Controller->action_display(Array)
#9 Z:\home\cms3\www\modules\cms3\engine\classes\controller.php(53): CMS3\Engine\Controller->action('display', Array)
#10 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(51): CMS3\Engine\Controller->display('', Array)
#11 Z:\home\cms3\www\modules\cms3\engine\classes\renderer\block.php(23): CMS3\Engine\Renderer_Block->get_action_output('cms3\ui_grid', Array, '')
#12 Z:\home\cms3\www\modules\cms3\engine\classes\renderer.php(26): CMS3\Engine\Renderer_Block->render(NULL, Array)
#13 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(231): CMS3\Engine\Renderer::display('block', Array)
#14 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(102): CMS3\Engine\Template->_execute_renderers('<!DOCTYPE HTML>...')
#15 Z:\home\cms3\www\modules\cms3\engine\classes\template.php(58): CMS3\Engine\Template->render(Array)
#16 Z:\home\cms3\www\modules\cms3\engine\classes\document.php(77): CMS3\Engine\Template::display('index')
#17 Z:\home\cms3\www\modules\cms3\engine\classes\app.php(362): CMS3\Engine\Document->render()
#18 Z:\home\cms3\www\modules\cms3\engine\classes\controller\app.php(13): CMS3\Engine\App->dispatch('admin/cms3-engi...', 'ru_RU', 'html')
#19 [internal function]: CMS3\Engine\Controller_App->action_display()
#20 Z:\home\cms3\www\modules\cms3\engine\classes\request\client\internal.php(86): ReflectionMethod->invoke(Object(CMS3\Engine\Controller_App))
#21 Z:\home\cms3\www\system\classes\kohana\request\client.php(64): CMS3\Engine\Request_Client_Internal->execute_request(Object(CMS3\Engine\Request))
#22 Z:\home\cms3\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(CMS3\Engine\Request))
#23 Z:\home\cms3\www\modules\cms3\engine\classes\core.php(10): Kohana_Request->execute()
#24 Z:\home\cms3\www\index.php(108): CMS3\Engine\Core::run()
#25 {main}
2011-09-26 19:05:49 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:05:49 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:06:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:06:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:07:24 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:07:24 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:09:29 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:09:29 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:09:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:09:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:10:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:10:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:11:01 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:11:01 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:12:47 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:12:47 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:12:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:12:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:14:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:14:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:14:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:14:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:15:28 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:15:28 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:17:07 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:17:07 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:18:21 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:18:21 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:18:35 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:18:35 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:20:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:20:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:20:19 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:20:19 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:21:55 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:21:55 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:24:22 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:24:22 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:24:39 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:24:39 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:26:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:26:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:27:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:27:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:30:29 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:30:29 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:30:34 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:30:34 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:30:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:30:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:30:48 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:30:48 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:31:23 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:31:23 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:31:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:31:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:31:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:31:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:33:16 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:33:16 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:33:32 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:33:32 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:34:25 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:34:25 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 19:35:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 19:35:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:10:43 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:10:43 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:10:45 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:10:45 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:12:37 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:12:37 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:15:52 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:15:52 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:16:11 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:16:11 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:18:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:18:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:26:17 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:26:17 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:26:18 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:26:18 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:26:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:26:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:26:29 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:26:29 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:49:42 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:49:42 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:49:59 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:49:59 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:50:26 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:50:26 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:50:44 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:50:44 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:50:54 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:50:54 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:52:12 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:52:12 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:52:46 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:52:46 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:52:51 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:52:51 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:56:56 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:56:56 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:57:41 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:57:41 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:58:08 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:58:08 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 21:58:20 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 21:58:20 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 22:00:56 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 22:00:56 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 22:01:27 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 22:01:27 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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
2011-09-26 22:01:53 --- ERROR: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
2011-09-26 22:01:53 --- STRACE: CMS3\Engine\Exception [ 0 ]: Unable to load document class for ico format ~ MODPATH\cms3\engine\classes\document.php [ 52 ]
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