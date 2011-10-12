<!DOCTYPE html>
<html>
<head>
	<cms3:include renderer="document" name="header" />
	<link rel="stylesheet" href="/themes/default_blue/css/main.css" type="text/css" />
</head>
<body>

<cms3:include renderer="message" />

<div id="menu" class="block menu-block">
<cms3:include renderer="block" position="left" template="raw" />
</div>
<div id="content">
	<cms3:include renderer="template" name="page" />
</div>

<div id="footer">&copy; 2010 CMS 3.0 [phptal]</div>

</body>
</html>