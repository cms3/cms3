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

<script type="text/javascript" src="/themes/admin/js/jquery-1.7.1.js"></script>
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

	<script type="text/javascript" src="/themes/admin/js/cms3/field.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/base.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/primary.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/integer.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/float.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/string.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/text.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/list.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/belongsto.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/hasmany.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/boolean.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/field/params.js"></script>

	<script type="text/javascript" src="/themes/admin/js/cms3/window.js"></script>

	<script type="text/javascript" src="/themes/admin/js/cms3/form.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/selectors.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/base.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/primary.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/integer.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/float.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/string.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/text.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/list.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/belongsto.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/hasmany.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/boolean.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/form/field/params.js"></script>

	<script type="text/javascript" src="/themes/admin/js/cms3/grid.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/selectors.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/base.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/primary.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/integer.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/float.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/string.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/text.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/list.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/belongsto.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/hasmany.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/boolean.js"></script>
	<script type="text/javascript" src="/themes/admin/js/cms3/grid/field/params.js"></script>
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