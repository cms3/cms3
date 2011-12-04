cms3.richGrid = new Object();
cms3.extend(cms3.richGrid, cms3.object, {
    fieldTypes: {},

    //Создание объектов колонок
    createFieldsObjects: function(){
        var grid = this;
        cms3.each(grid.models, function(modelName, model){
            cms3.each(model.fields, function(fieldId, field){
               field.id = fieldId;
               field.selectors = grid.selectors;
               field.grid = grid;
               model.fields[fieldId] = cms3.field[field.type].create(field);
               // Если нужно будет строить список моделей автоматически
               /*if (field.model != undefined){
                   grid.createFieldsObjects(field.model.fields);
               }*/
            });
        });
    },

    init: function(){
        var $ = jQuery;
        var grid = this;

        //ссылки на текущую модель
        this.fields = this.models[this.model].fields;
        this.items = this.models[this.model].items;

        this.selectors.gridId = this.id;
        this.selectors.build();
        //alert(this.selectors.editFieldList.Button);

        //Создание объектов колонок
        this.createFieldsObjects();

        //Build tablet items
        $(this.container).prepend($("#gridTemplate").tmpl({fields: this.fields, items: this.items, id: this.id}));
        this.editColumnsList();

        cms3.each(this.fields, function(fieldId, field){
            field.createEvents();
        });

        // События для скрытия/отображения колонок
        $(this.selectors.editFieldList.PopupWindow).makePopup();
        $(this.selectors.editFieldList.Button).click(function(e) {
            $(grid.selectors.editFieldList.PopupWindow).togglePopup();
            e.stopPropagation();
        });

        $(this.selectors.editFieldList.fieldSelectors).change(function() {
	        grid.editColumnsList();
        });

        // Кнопки
        $('#sync').click(function() {
		    //grid.sync();
            grid.setFilters();
	    });

        $('div#' + this.id + ' div.controls button.new').click(function(){
            grid.editItems(0);
        });

        $('div#' + this.id + ' div.controls button.edit').click(function(){
            grid.editItems();
        });

        $('div#' + this.id + ' div.controls button.delete').click(function(){
            grid.deleteItems();
        });

        $(this.selectors.grid.allItems).live('dblclick',function(){
            grid.editItems(cms3.helper.removeIdPrefix($(this).attr('class'), 'item'));
        });

        // check all
        $(this.selectors.grid.checkAll).change(function(){
            if ($(this).attr("checked"))
            {
                $(grid.selectors.grid.itemSelectors).attr("checked","checked");
            }
            else
            {
                $(grid.selectors.grid.itemSelectors).removeAttr("checked");
            }
        });

        $(grid.selectors.grid.itemSelectors).live('change', function(){
            $(grid.selectors.grid.checkAll).removeAttr("checked");
        });

        /*$(function() {
            var dates = $( "#grid_date_from, #grid_date_to" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'd MM yy',
                showOtherMonths: true,
                selectOtherMonths: false,

                onSelect: function( selectedDate )
                {
                    var option = this.id == "grid_date_from" ? "minDate" : "maxDate",
                        instance = $( this ).data( "datepicker" ),
                        date = $.datepicker.parseDate(
                            instance.settings.dateFormat ||
                            $.datepicker._defaults.dateFormat,
                            selectedDate, instance.settings );
                    dates.not( this ).datepicker( "option", option, date );
                }
            });
        });*/
        
        /*$(function() {
            $( "table.grid tbody" ).sortable({
                axis: 'y'
            });
            $( "table.grid tbody" ).disableSelection();
        });*/
    },

    getFilters: function(){
        var $ = jQuery;
        var filters = new Object();
        cms3.each(this.fields, function(fieldId, field)
        {
            if (field.isFilterSet())
            {
                filters[fieldId] = field.getFilterValue();
            }
        });
        return filters;
    },

    setFilters: function()
    {
        var $ = jQuery;
        var grid = this;
        var filters = grid.getFilters();
        
        cms3.each(this.items, function(i, item){
            var visible = true;
            cms3.each(filters, function(filterFieldId, filter){
                cms3.each(item, function(cellFieldId, cell){
                    if (filterFieldId == cellFieldId)
                    {
                        if (!grid.fields[filterFieldId].filter(filter, cell))
                        {
                            visible = false;
                        }
                    }
                });
            });

            var itemElement = $(grid.selectors.grid.item(item.id));
            if (visible)
            {
                if (!itemElement.length)
                {
                    itemElement = $("#itemTableGridTemplate").tmpl({item: item, fields: grid.fields });
                }
                else
                {
                    itemElement.show();
                }

                if (i == 0)
                {
                    $(grid.selectors.grid.body).prepend(itemElement);
                }
                else
                {
                    var previousItem = cms3.previousItem(grid.items, i);
                    $(grid.selectors.grid.item(previousItem.id)).after(itemElement);
                }
            }
            else
            {
                itemElement.hide();
            }
        });
        grid.editColumnsList();
    },

    hideOrderings: function(){
        var $ = jQuery;

        cms3.each(this.fields, function(fieldId, field)
        {
            field.hideOrdering();
        });
    },

    setOrdering: function(){
        var $ = jQuery;
        var grid = this;

        cms3.each(this.fields, function(fieldId, field)
        {
            if (field.isOrderingSet())
            {
                gridfield = field;
                if (field.isSortASC)
                {
                    grid.items.sort(field.sortASC);
                }
                else
                {
                    grid.items.sort(field.sortDESC);
                }
                delete gridfield;

            }
        });

        this.setFilters();
    },

    editColumnsList: function() {
        var $ = jQuery;
        var grid = this;
        $(this.selectors.editFieldList.fieldSelectors).each(function(){
            var id = $(this).attr('id')
            id = cms3.helper.removeIdPrefix(id,'view');
            var selector = grid.selectors.grid.fieldCells(id);
            if (this.checked)
            {
                $(selector).show();
            }
            else
            {
                $(selector).hide();
            }
        });
    },

    sync: function()
    {
        var $ = jQuery;
        var grid = this;
        $.getJSON("/json/articles.php",
            /*{
                tags: "cat",
                tagmode: "any",
                format: "json"
            },*/
            function(data)
            {
                cms3.each(data, function(i, item) {
                    switch (item.status)
                    {
                        //добавлено
                        case 0:
                            if (i>0)
                            {
                                $("#item"+(data[i-1].id)).after($("#itemTemplate").tmpl({item: item, columns: grid.columns}));
                            }
                            else
                            {
                                $("#div#workspace tbody").prepend($("#itemTemplate").tmpl({item: item, columns: grid.columns}));
                            }
                            break
                        //изменено
                        case 1:
                            $("#item"+item.id).replaceWith($("#itemTemplate").tmpl({item: item, columns: grid.columns}));
                            break
                        //удалено
                        case 2:
                            $("#item"+item.id).remove();
                            delete data[i];
                            break
                        //не подходит под фильтр
                        case 3:
                            $("#item"+item.id).remove();
                            delete data[i];
                            break
                        //подходит под фильтр
                        case 3:
                            if (i>0)
                            {
                                $("#item"+(data[i-1].id)).after($("#itemTemplate").tmpl({item: item, columns: grid.columns}));
                            }
                            else
                            {
                                $("#div#workspace tbody").prepend($("#itemTemplate").tmpl({item: item, columns: grid.columns}));
                            }
                            break
                        //без изменений
                        default:
                            if (i>0)
                            {
                                $("#item"+(data[i-1].id)).after($("#item"+item.id));
                            }
                            else
                            {
                                $("#div#workspace tbody").prepend($("#item"+item.id));
                            }

                            cms3.each(grid.items, function(j, oldItem)
                            {
                                if (item.id == oldItem.id)
                                {
                                    data[i] = oldItem;
                                    return false;
                                }
                            });
                            break
                    }
                });
                columns();
                grid.items = data;
            }
        );
    },

    deleteItems: function(id)
    {
        var $ = jQuery;
        var grid = this;
        var ids = this.getActiveItemIds(id);

        var data = new Object();
        data.ids = ids;
        data.model = this.model;

        $.getJSON("/action/cms3/dataview/delete",
            data,
            function(items){
                
        });

        cms3.each(ids, function(j, id){
            cms3.each(grid.items,function(i, item){
                if (id == item.id)
                {
                    delete grid.items[i];
                }
            });
        });

        $(grid.selectors.grid.items(ids)).remove();
        //this.setOrdering();
    },

    editItems: function(id)
    {
        var $ = jQuery;
        var grid = this;
        var ids = this.getActiveItemIds(id);

        // <different>
        var currentItem = new Object();

        // редактирование
        if (id != 0)
        {
            cms3.each(ids, function(i, id)
            {
                cms3.each(grid.items, function(i, item)
                {
                    if (item.id == id)
                    {
                        cms3.each(item, function(fieldId, cell)
                        {
                            var different = true;
                            var n = 0;

                            if (currentItem[fieldId] == undefined)
                            {
                                currentItem[fieldId] = new Array();
                            }
                            else
                            {
                                cms3.each(currentItem[fieldId], function(k, knownCell)
                                {
                                    if (cell == knownCell)
                                    {
                                        different = false;
                                    }

                                    // get array number to add new cell variant
                                    n = k+1;
                                });
                            }

                            if (different)
                            {
                                currentItem[fieldId][n] = cell;
                                // alert(n + '. ' + fieldId +': ' + cell);
                            }
                        });
                    }
                });
            });
        }
        //новый
        else
        {
            cms3.each(this.fields, function(fieldId, field) {
                currentItem[fieldId] = new Array();
                currentItem[fieldId][0] = field.defaultValue;
            });
        }

        if (currentItem.id != undefined)
        {
            var formId = currentItem.id.join('_');
            ids = currentItem.id;
            var formAbsoluteId = cms3.helper.removeIdPrefix(this.selectors.editItems.editForm(formId),'#');

            if ($(grid.selectors.editItems.editForm(formId)).length == 0)
            {
                $("#editItemTemplate").tmpl({fields: this.fields, item: currentItem, elementId: formAbsoluteId , gridId: grid.id}).appendTo(this.selectors.editItems.parentElement);

                $(function() {
                    $(grid.selectors.editItems.editForm(formId)).dialog({
                        /*width: 400,
                        height: 350,*/
                        buttons: [
                            {
                                text: "Save",
                                //disabled: true,
                                click: function()
                                {
                                    grid.saveForm(ids);
                                    $(this).dialog("close");
                                }
                            },
                            {
                                text: "Save a draft",
                                click: function() { $(this).dialog("close"); }
                            },
                            {
                                text: "Cancel",
                                click: function() { $(this).dialog("close"); }
                            }
                        ],
                        close: function() {
                            $(this).dialog("destroy");
                            $(grid.selectors.editItems.editForm(formId)).remove();
                        }
                    });

                });

                // Highlight edited items
                $(this.selectors.editItems.editForm(formId)).mouseover(function(){
                    $(grid.selectors.grid.items(ids)).addClass('highlight');
                });

                $(this.selectors.editItems.editForm(formId)).mouseleave(function(){
                    $(grid.selectors.grid.items(ids)).removeClass('highlight');
                });
            }
        }
    },

    saveForm: function(ids){
        var $ = jQuery;
        var grid = this;
        
        var formId = ids.join('_');

        var formData = new Object();
        formData.ids = ids;

        cms3.each(this.fields, function(fieldId, field)
        {
            if (field.isChange(formId, fieldId))
            {
                formData[fieldId] = field.getFormValue(formId, fieldId);
                //alert(fieldId + ': ' + formData[field.id]);
            }
        });

        /*alert(formData['title']);*/

        var data = new Object();
        // changes
        data.items = new Object();
        data.items[0] = formData;
        data.model = this.model;

        cms3.each(data.items, function(i, items) {
            var itemChanges = cms3.helper.clone(items);
            delete itemChanges.ids;
            cms3.each(items.ids, function(j, id) {
                cms3.each(grid.items, function(k, item) {
                    //alert(k);
                    if (id == item.id)
                    {
                        $.extend(item, itemChanges);
                        $(grid.selectors.grid.item(item.id)).replaceWith($("#itemTableGridTemplate").tmpl({item: item, fields: grid.fields }));
                    }
                });
            });
        });

        this.editColumnsList();
        //this.holdItems(ids);
        this.setOrdering();

        // http://cms3/action/cms3/dataview/save?model=cms3-content-item&form[id]=1&form[title]=change

        /*$.ajax({
            type: "POST",
            url: "/action/cms3/dataview/save",
            data: $.param(data),
            success: function(msg){
                alert( "Data Saved: " + msg );
            }
        });*/

        $.getJSON("/action/cms3/dataview/save",
            data,
            function(items){
                cms3.each(items, function(i, savedItem) {
                    var isNew = true;
                    cms3.each(grid.items, function(j, item) {
                        if (savedItem.id == item.id)
                        {
                            isNew = false;
                            $.extend(item, savedItem);
                            $(grid.selectors.grid.item(item.id)).replaceWith($("#itemTableGridTemplate").tmpl({item: item, fields: grid.fields }));
                        }
                    });
                    if (isNew)
                    {
                        grid.items.push(savedItem);
                        $(grid.selectors.grid.body).append($("#itemTableGridTemplate").tmpl({item: savedItem, fields: grid.fields }));
                    }
                });
                //grid.unHoldItems(ids);
                grid.editColumnsList();
                grid.setOrdering();
        });


    },

    holdItems: function(ids)
    {
       /* var $ = jQuery;
        $(this.selectors.grid.items(ids)).addClass('load');
        $(this.selectors.grid.items(ids)).removeAttr('checked');*/
    },

    unHoldItems: function(ids)
    {
        /*var $ = jQuery;
        $(this.selectors.grid.items(ids)).removeClass('load');*/
    },

    getSelectedItemIds: function()
    {
        var $ = jQuery;

        var ids = new Array();
        cms3.each($(this.selectors.grid.itemCheckedSelectors), function(i, itemCheckedSelector) {
            // input
            var id = $(itemCheckedSelector).attr('class');

            id = cms3.helper.removeIdPrefix(id, 'item');

            ids[i] = id;
        });

        return ids;
    },

    getActiveItemIds: function(id)
    {
        if ((typeof id) === 'undefined')
        {
            return this.getSelectedItemIds();
        }
        else
        {
            return new Array(id)
        }
    },

    sortable: function() {
        this.itemsView.sort(field.sIncrease); // В
    }
});