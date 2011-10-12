Ext.Loader.setConfig({enabled: true});

Ext.Loader.setPath('Ext.ux', 'ext/examples/ux/');

Ext.require(['*']);

Ext.require([
	'Ext.ux.data.PagingMemoryProxy'
]);
Ext.require([
	'Ext.ux.CheckColumn'
]);

Ext.define('Ext.app.Page', {
    extend: 'Ext.ux.PortalPanel',
	xtype: 'portalpanel',
	region: 'center',
	cls: 'x-page',
	border: false
});

Ext.onReady(function() {

	var header = Ext.create('Ext.Panel', {
		region: 'north',
		height: 78,
		border: false,
		layout: 'column',
		items: [
			{
				width: 130,
				border: false,
				items: [
					{
						xtype: 'button',
						height: 70,
						width: 22,
						margin: '4 0 0 4',
						menu: {
							xtype: 'menu',
							
							items: [
							{
								xtype: 'menuitem',
								text: '<b>Показать главную</b>',
								listeners: {
									click: function() {
										mainframe.setActiveTab(0);
									}
								}
							},
							{
								xtype: 'menuitem',
								text: 'Интернет-магазин',
								hideOnClick: true,
								listeners: {
									click: function() {
										mainframe.openPage('shop', 'Интернет-магазин');
									}
								}
							},
							{
								xtype: 'menuitem',
								text: 'Галерея',
								listeners: {
									click: function() {
										mainframe.openPage('gallery', 'Галерея');
									}
								}
							},
							{
								xtype: 'menuitem',
								text: 'Контент',
								listeners: {
									click: function() {
										mainframe.openPage('content', 'Контент');
									}
								}
							},
							'-',
							{
								xtype: 'menuitem',
								text: 'Все модули',
								menu: {
									xtype: 'menu',
									items: [
										{
											xtype: 'menuitem',
											text: 'Интернет-магазин',
											menu: {
												xtype: 'menu',
												items: [{
													text: 'Раздел 1',
												},
												{
													text: 'Раздел 2',
												},
												{
													text: 'Раздел 3',
												},
												{
													text: 'Еще раздел',
												}]
											}
										},
										{
											text: 'Галерея',
											menu: {
												xtype: 'menu',
												items: [{
													text: 'Раздел 1',
												},
												{
													text: 'Раздел 2',
												},
												{
													text: 'Раздел 3',
												},
												{
													text: 'Еще раздел',
												}]
											}
										},
										{
											text: 'Контент',
											menu: {
												xtype: 'menu',
												items: [{
													text: 'Раздел 1',
												},
												{
													text: 'Раздел 2',
												},
												{
													text: 'Раздел 3',
												},
												{
													text: 'Еще раздел',
												}]
											}
										},
										{
											text: 'Пользователи',
											menu: {
												xtype: 'menu',
												items: [{
													text: 'Раздел 1',
												},
												{
													text: 'Раздел 2',
												},
												{
													text: 'Раздел 3',
												},
												{
													text: 'Еще раздел',
												}]
											}
										}
									]
								}
							}
						]
						}
					},
					{
						xtype: 'button',
						margin: '4 0 0 0',
						height: 70,
						width: 94,
						scale: 'large',
						text: '<div class="icon-logo"></div>',
						listeners: {
							click: function() {
								mainframe.setActiveTab(0);
							}
						}
					}
				]
			},
			{
				html: '<div style="text-align: right; line-height: 25px">Вы зашли как <a href="#">Админ</a></div>',
				columnWidth: 1,
				margin: '4 8 0 0',
				border: false,
				region: 'north',
				height: 25
			}
		]
	});

	var mainframe = Ext.create('Ext.TabPanel', {
		region: 'center',
		layout: 'card',
		activeTab: 0,
		tabPosition: 'bottom',
		
		defaults: {
			closable: true
		},
		
		setTabTitle: function(tabId, title)
		{
			var tab = Ext.get(tabId);
			if (tab != null)
			{
				buttons = tab.parent().parent().query('button');
				if (buttons != null && buttons.length > 0)
				{
					buttons[0].innerHTML = title;
				}
			}
		},
		
		openPage: function (name) {
			var tabId = 'cms3-taskbar-tab-' + name;
			tab = Ext.getCmp(tabId);
			if (tab != null)
			{
				mainframe.setActiveTab(tab);
				return tab;
			}
			var tab = mainframe.add({
				id: tabId,
				title: 'Loading...',
				html: 'Loading...',
			});
			mainframe.setActiveTab(tab);
			
			Ext.Ajax.request({
				url: 'pages/' + name + '.js', 
				
				success: function(r) {
					var page = eval(r.responseText);
					if (page)
					{
						tab.tab.setText(page.title);
						tab.update('');
						tab.add(page);
					}
					else
					{
						tab.update('Loading error: Unknown');
					}
				},
				
				failure: function (result, request) {
					tab.update('Loading error: ' + result.responseText);
				},
				scope: this
			});
			
			return tab;
		}
	});
	
	var viewport = Ext.create('Ext.Viewport', {
		renderTo: 'app-viewport',
		layout: 'border',
		margins: '2 5 5 0',
		items: [
			header,
			mainframe
		]
	});

	mainframe.openPage('main').tab.setClosable(false);
	mainframe.openPage('content');
	//mainframe.openPage('gallery');
});

