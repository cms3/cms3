<?php defined('SYSPATH') OR die('No direct access allowed.');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<cms3:include renderer="document" name="header" />
	<link rel="stylesheet" href="/themes/default/css/main.css" type="text/css" />
</head>
<body>

<div id="menu" class="block menu-block">
<cms3:include renderer="block" position="left" template="raw" />
</div>
<div id="content">
	<cms3:include renderer="template" name="page" />
</div>

<div id="footer">&copy; 2010 CMS 3.0 [beilpuz]</div>

</body>
</html>