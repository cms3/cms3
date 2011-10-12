<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-10-01 14:11:06 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/auth_openid\vendor\openid\Auth\OpenID\BigMath.php [ 369 ]
2010-10-01 14:13:39 --- ERROR: ErrorException [ 64 ]: Cannot redeclare class Auth_OpenID_BcMathWrapper ~ MODPATH/auth_openid\vendor\openid\Auth\OpenID\BigMath.php [ 265 ]
2010-10-01 14:14:49 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/auth_openid\vendor\openid\Auth\OpenID\BigMath.php [ 369 ]
2010-10-01 16:46:55 --- ERROR: Auth_Exception [ 0 ]: Authentication error: Not a valid OpenID: yanis.loginza.ru. ~ MODPATH/auth_openid\classes\auth\method\openid\core.php [ 15 ]
2010-10-01 16:47:07 --- ERROR: Auth_Exception [ 0 ]: Authentication error: Not a valid OpenID: http://yanis.loginza.ru. ~ MODPATH/auth_openid\classes\auth\method\openid\core.php [ 15 ]
2010-10-01 16:47:42 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: php_network_getaddresses: getaddrinfo failed: Обычно - это временная ошибка, возникающая во время разрешения имени узла, и означающая, что локальный сервер не получил ответа от полномочного сервера.  ~ MODPATH/auth_openid\vendor\openid\Auth\Yadis\PlainHTTPFetcher.php [ 202 ]