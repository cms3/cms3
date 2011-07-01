Ext.create('Ext.app.Page', {
	id: 'app-portal',
	title: 'Главная',
	items: [{
		id: 'col-1',
		flex: 1,
		items: [{
				id: 'portlet-1',
				title: 'Новые товары'
			},{
				id: 'portlet-2',
				title: 'Последние продажи'
			}]
		},{
			id: 'col-2',
			flex: 1,
			items: [{
				id: 'portlet-3',
				title: 'Статистика посещений'
			}]
		},{
			id: 'col-3',
			flex: 1,
			margins: '0 26 0 0',
			items: [{
				id: 'portlet-4',
				title: 'Лог действий'
			}]
		}]
});