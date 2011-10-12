cms3.richGrid = {};
cms3.extend(cms3.richGrid, cms3.object, {
    fieldTypes: {},

    columns: {},

    init: function(){
        var $ = jQuery;
        var grid = this;

        this.selectors.gridId = this.id;
        this.selectors.build();
        //alert(this.selectors.editFieldList.Button);

        //Наследование колонок от их типов
        $.each(this.fields, function(i, userField){
            var field = {};
            $.extend(field, grid.fieldTypes[userField.type], userField);
            grid.fields[i] = field;
        });

        //Build tablet items
        $(this.container).prepend($("#gridTemplate").tmpl({fields: this.fields, items: this.items, id: this.id}));
        this.editColumnsList();

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
        $('div#' + this.id + 'input#sync').click(function() {
		    grid.sync();
	    });

        $('div#' + this.id + ' div.controls button.new').click(function(){
            grid.getSelectedItemIds();
            //grid.edit(5);
        });

        $('div#' + this.id + ' div.controls button.edit').click(function(){
            grid.editItems();
        });

        $(this.selectors.grid.allItems).dblclick(function(){
            grid.editItems(cms3.helper.removeIdPrefix($(this).attr('class'), 'item'));
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
                $.each(data, function(i, item) {
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

                            $.each(grid.items, function(j, oldItem)
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

    editItems: function(id)
    {
        var $ = jQuery;
        var grid = this;
        var ids = this.getActiveItemIds(id);

        // <different>
        var currentItem = {};
        var different = '<different>';
        var j = 0;

        $.each(ids, function(i, id)
        {
            $.each(grid.items, function(i, item)
            {
                if (item.id == id)
                {
                    if (currentItem.id == undefined)
                    {
                        currentItem = cms3.helper.clone(item);
                        var idArray = new Array();
                        idArray[j] = currentItem['id'];
                        currentItem['id'] = idArray;
                    }
                    else
                    {
                        $.each(item, function(i, cell)
                        {
                            if (i == 'id')
                            {
                                j++;
                                currentItem['id'][j] = cell;
                            }
                            else
                            {
                                if (cell != currentItem[i])
                                {
                                    currentItem[i] = different;
                                }
                            }
                        });
                    }
                }
            });
        });

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

        this.holdItems(ids);
        var formId = ids.join('_');

        var formData = new Array();
        formData.ids = ids;

        $.each(this.fields, function(i, field){
            var valueContainer = $(this.selectors.editItems.editForm(formId) + 'div.cell.' + field.id);
            if (field.isChange(valueContainer))
            {
                formData[field.id] = field.getFormValue(valueContainer);
            }
        });
    },

    deleteItems: function(id)
    {
        var ids = this.getActiveItemIds(id);



    },

    holdItems: function(ids)
    {
        var $ = jQuery;
        $(this.selectors.grid.items(ids)).addClass('load');

    },

    getSelectedItemIds: function()
    {
        var $ = jQuery;

        var ids = new Array();
        $.each($(this.selectors.grid.itemCheckedSelectors), function(i, itemCheckedSelector) {
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
    }
});