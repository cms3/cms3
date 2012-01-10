<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<cms3:include renderer="document" name="header" />
<link rel="icon" href="favicon.ico" type="image/x-icon" /> 
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
<link type="text/css" href="/themes/admin/css/custom-theme/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
<link type="text/css" href="/themes/admin/css/general.css" rel="stylesheet"  />
<link type="text/css" href="/themes/admin/css/grid.css" rel="stylesheet"  />
<link type="text/css" href="/themes/admin/css/window.css" rel="stylesheet"  />
<link type="text/css" href="/themes/admin/css/form.css" rel="stylesheet"  />

<script type="text/javascript" src="/themes/admin/js/jquery-1.6.1.min.js"></script>
<script type="text/javascript">
     var $j = jQuery.noConflict();
</script>
<script type="text/javascript" src="/themes/admin/js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="/themes/admin/js/jquery.tmpl.min.js"></script>

<script type="text/javascript" src="/themes/admin/js/popupwnd.js"></script>
<script type="text/javascript" src="/themes/admin/js/wysiwyghtmleditor.js"></script>
<script type="text/javascript" src="/themes/admin/js/menu.js"></script>

	<script type="text/javascript" src="/themes/admin/js/cms3.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/helper.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/object.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/selectors.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/base.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/primary.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/integer.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/float.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/string.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/stringMultilang.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/text.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/textMultilang.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/list.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/belongsto.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/hasmany.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/boolean.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/fieldTypes/params.js"></script>
</head>

<body>
	<div id="top-panel">
    	<div id="notice">
        	<div><nobr>Delete 3 items <input type="submit" name="cancel" value="Cancel"/></nobr></div>
        </div>
    	<div id="user"><a href="#">Admin</a> <input type="submit" value="Log out" /></div>
    </div>

	<cms3:include renderer="block" position="admin-menu" template="raw" />
    
    <div id="context-block">
        <h3>Статьи</h3>
        <ul>
            <li>Категории (Меню)</li>
            <li>Свойства</li>
            <li>Общие настройки</li>
        </ul>
        <h3>Context links</h3>
        <ul>
            <li>Link1</li>
            <li>Link2</li>
            <li>Link3</li>
            <li>Link4</li>
        </ul>
    </div>
    <div id="workspace">
		<cms3:include renderer="block" position="admin" template="raw" />
		
        <div style="clear:both"></div>
    </div>
    <div id="footer"><p><a href="http://cms3.org/">CMS 3.0</a> — free open sorce software.</p></div>
</body>
</html>