(function () {
	
	
	
	dummyData = [
        ['3m Co',71.72,0.02,0.03,'9/1 12:00am', 'Manufacturing'],
        ['Alcoa Inc',29.01,0.42,1.47,'9/1 12:00am', 'Manufacturing'],
        ['Altria Group Inc',83.81,0.28,0.34,'9/1 12:00am', 'Manufacturing'],
        ['American Express Company',52.55,0.01,0.02,'9/1 12:00am', 'Finance'],
        ['American International Group, Inc.',64.13,0.31,0.49,'9/1 12:00am', 'Services'],
        ['AT&T Inc.',31.61,-0.48,-1.54,'9/1 12:00am', 'Services'],
        ['Boeing Co.',75.43,0.53,0.71,'9/1 12:00am', 'Manufacturing'],
        ['Caterpillar Inc.',67.27,0.92,1.39,'9/1 12:00am', 'Services'],
        ['Citigroup, Inc.',49.37,0.02,0.04,'9/1 12:00am', 'Finance'],
        ['E.I. du Pont de Nemours and Company',40.48,0.51,1.28,'9/1 12:00am', 'Manufacturing'],
        ['Exxon Mobil Corp',68.1,-0.43,-0.64,'9/1 12:00am', 'Manufacturing'],
        ['General Electric Company',34.14,-0.08,-0.23,'9/1 12:00am', 'Manufacturing'],
        ['General Motors Corporation',30.27,1.09,3.74,'9/1 12:00am', 'Automotive'],
        ['Hewlett-Packard Co.',36.53,-0.03,-0.08,'9/1 12:00am', 'Computer'],
        ['Honeywell Intl Inc',38.77,0.05,0.13,'9/1 12:00am', 'Manufacturing'],
        ['Intel Corporation',19.88,0.31,1.58,'9/1 12:00am', 'Computer'],
        ['International Business Machines',81.41,0.44,0.54,'9/1 12:00am', 'Computer'],
        ['Johnson & Johnson',64.72,0.06,0.09,'9/1 12:00am', 'Medical'],
        ['JP Morgan & Chase & Co',45.73,0.07,0.15,'9/1 12:00am', 'Finance'],
        ['McDonald\'s Corporation',36.76,0.86,2.40,'9/1 12:00am', 'Food'],
        ['Merck & Co., Inc.',40.96,0.41,1.01,'9/1 12:00am', 'Medical'],
        ['Microsoft Corporation',25.84,0.14,0.54,'9/1 12:00am', 'Computer'],
        ['Pfizer Inc',27.96,0.4,1.45,'9/1 12:00am', 'Services', 'Medical'],
        ['The Coca-Cola Company',45.07,0.26,0.58,'9/1 12:00am', 'Food'],
        ['The Home Depot, Inc.',34.64,0.35,1.02,'9/1 12:00am', 'Retail'],
        ['The Procter & Gamble Company',61.91,0.01,0.02,'9/1 12:00am', 'Manufacturing'],
        ['United Technologies Corporation',63.26,0.55,0.88,'9/1 12:00am', 'Computer'],
        ['Verizon Communications',35.57,0.39,1.11,'9/1 12:00am', 'Services'],
        ['Wal-Mart Stores, Inc.',45.45,0.73,1.63,'9/1 12:00am', 'Retail'],
        ['Walt Disney Company (The) (Holding Company)',29.89,0.24,0.81,'9/1 12:00am', 'Services']
    ];
	
	for (var i = 0; i < dummyData.length; i++){
       dummyData[i].push('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed metus nibh, sodales a, porta at, vulputate eget, dui. Pellentesque ut nisl. ');
    }
	
	Ext.define('Article', {
        extend: 'Ext.data.Model',
        idProperty: 'title',
        fields: [
           {name: 'title', type: 'string'},
           {name: 'price', type: 'float'},
           {name: 'change', type: 'float'},
           {name: 'pctChange', type: 'float'},
           {name: 'lastChange', type: 'date', dateFormat: 'n/j h:ia'}
        ]        
    });
	
	var store = Ext.create('Ext.data.Store', {
        model: 'Article',
        pageSize: 20,
        proxy: {
            type: 'pagingmemory',
            data: dummyData,
            reader: {
                type: 'array'
            }
        }
    });

	var addAction = new Ext.Action({
        icon   : '/img/icons/add.png',  
        text: 'Add',
        handler: function(widget, event) {
            alert('Add item');
        }
    });
	
	var editAction = new Ext.Action({
        icon   : '/img/icons/edit.png',  
        text: 'Edit',
        disabled: true,
        handler: function(widget, event) {
            var rec = grid.getSelectionModel().getSelection()[0];
            if (rec) {
                alert("Edit " + rec.get('title'));
            } else {
                alert('Please select a item from the grid');
            }
        }
    });
	
	var deleteAction = new Ext.Action({
        icon: '/img/icons/delete.png',  
        text: 'Delete',
        disabled: true,
        handler: function(widget, event) {
            var rec = grid.getSelectionModel().getSelection()[0];
            if (rec) {
                alert("Delete " + rec.get('title'));
            } else {
                alert('Please select a item from the grid');
            }
        }
    });
	
	var selectionModel = Ext.create('Ext.selection.CheckboxModel');
	
	var cellEditing = Ext.create('Ext.grid.plugin.CellEditing', {
        clicksToEdit: 1
    });

	var grid = new Ext.grid.GridPanel({
        store: store,
		frame: false,
		height: 518,
		autoScroll: true,
		//selModel: selectionModel,
        viewConfig: {
			forceFit: true
        },
        // grid columns
        columns:[{
            xtype: 'rownumberer',
            width: 40,
            sortable: false
        },{
            text: 'Title',
            flex: 1,
            sortable: true,
            dataIndex: 'title',
			field: {
                allowBlank: false
            }
        },{
            text: 'Price',
            width: 125,
            sortable: true,
            dataIndex: 'price',
			renderer: Ext.util.Format.usMoney
        },{
            text: 'Change',
            width: 125,
            sortable: true,
            dataIndex: 'change'
        },{
		    text: 'pctChange',
            width: 125,
            sortable: true,
            dataIndex: 'pctChange'
        },{
            text: 'Salary',
            width: 125,
            sortable: true,
            dataIndex: 'lastChange',
            align: 'right'
        }],

		dockedItems: [{
            xtype: 'toolbar',
            items: [
                addAction,
				'-',
				editAction,
				deleteAction
            ]
        }],
		
		bbar: Ext.create('Ext.PagingToolbar', {
            pageSize: 20,
            store: store,
            displayInfo: true
        }),
		
		//plugins: [cellEditing]
    });
	
	/*
	grid.getSelectionModel().on({
        selectionchange: function(sm, selections) {
            if (selections.length) {
                editAction.enable();
                deleteAction.enable();
            } else {
                editAction.disable();
                deleteAction.disable();
            }
        }
    });
*/
/*
	var data = createFakeData(50),
        ln = data.length,
        records = [],
        i = 0;
    for (; i < ln; i++) {
        records.push(Ext.ModelMgr.create(data[i], 'Article'));
    }
    store.cacheRecords(records);
    
    store.guaranteeRange(0, 49);
*/
	var page = Ext.create('Ext.app.Page', {
		id: 'app-content',
		title: 'Контент',
		frame: false,
 		layout: 'fit',
		defaults: {
			layout: 'fit'	
		},
		autoScroll: true,
	});
	
	page.add(grid);
	
	store.load();
	
	return page;
	
}).call();
