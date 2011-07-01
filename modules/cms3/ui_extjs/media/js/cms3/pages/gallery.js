(function () {

    function formatDate(value){
        return value ? Ext.Date.dateFormat(value, 'M d, Y') : '';
    }

    Ext.define('Plant', {
        extend: 'Ext.data.Model',
        fields: [
            // the 'name' below matches the tag name to read, except 'availDate'
            // which is mapped to the tag 'availability'
            {name: 'common', type: 'string'},
            {name: 'botanical', type: 'string'},
            {name: 'light'},
            {name: 'price', type: 'float'},
            // dates can be automatically converted by specifying dateFormat
            {name: 'availDate', mapping: 'availability', type: 'date', dateFormat: 'm/d/Y'},
            {name: 'indoor', type: 'bool'}
        ]
    });


    // create the Data Store
    var store = Ext.create('Ext.data.Store', {
        // destroy the store if the grid is destroyed
        autoDestroy: true,
        model: 'Plant',
        proxy: {
            type: 'ajax',
            // load remote data using HTTP
            url: '/ext/examples/grid/plants.xml',
            // specify a XmlReader (coincides with the XML format of the returned data)
            reader: {
                type: 'xml',
                // records will have a 'plant' tag
                record: 'plant'
            }
        },
        sorters: [{
            property: 'common',
            direction:'ASC'
        }]
    });

    var cellEditing = Ext.create('Ext.grid.plugin.CellEditing', {
        clicksToEdit: 1
    });

    // create the grid and specify what field you want
    // to use for the editor at each header.
    var grid = Ext.create('Ext.grid.Panel', {
        store: store,
        columns: [{
            id: 'common',
            header: 'Common Name',
            dataIndex: 'common',
            flex: 1,
            field: {
                allowBlank: false
            }
        }, {
            header: 'Light',
            dataIndex: 'light',
            width: 130,
            field: {
                xtype: 'combobox',
                typeAhead: true,
                triggerAction: 'all',
                store: [
                    ['Shade','Shade'],
                    ['Mostly Shady','Mostly Shady'],
                    ['Sun or Shade','Sun or Shade'],
                    ['Mostly Sunny','Mostly Sunny'],
                    ['Sunny','Sunny']
                ],
                lazyRender: true,
                listClass: 'x-combo-list-small'
            }
        }, {
            header: 'Price',
            dataIndex: 'price',
            width: 70,
            align: 'right',
            renderer: 'usMoney',
            field: {
                xtype: 'numberfield',
                allowBlank: false,
                minValue: 0,
                maxValue: 100000
            }
        }, {
            header: 'Available',
            dataIndex: 'availDate',
            width: 95,
            renderer: formatDate,
            field: {
                xtype: 'datefield',
                format: 'm/d/y',
                minValue: '01/01/06',
                disabledDays: [0, 6],
                disabledDaysText: 'Plants are not available on the weekends'
            }
        }, {
            header: 'Indoor?',
            dataIndex: 'indoor',
            width: 55
        }],
        selModel: {
            selType: 'cellmodel'
        },
        width: 600,
        height: 300,
        title: 'Edit Plants?',
        frame: true,
        plugins: [cellEditing]
    });

    // manually trigger the data store load
    store.load();

	var page = Ext.create('Ext.app.Page', {
		id: 'app-gallery',
		title: 'Галерея',
		html: '<b>Галерея</b>'
	});

	page.add(grid);
	
	return page;
	
}).call();