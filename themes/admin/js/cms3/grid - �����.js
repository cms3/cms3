cms3.richGrid = {};
cms3.extend(cms3.richGrid, cms3.object, {
    fieldTypes: {},

    columns: {},

    selectors: {
        build: function()
        {
            this.parentElement = 'div#' + this.id;

            this.editFieldList = {};
            this.editFieldList.parentElement  = this.parentElement + ' div.edit-field-list';
            this.editFieldList.Button         = this.editFieldList.parentElement;
            this.editFieldList.PopupWindow    = this.editFieldList.parentElement + ' div.popupwnd';
            this.editFieldList.fieldSelectors = this.editFieldList.parentElement + ' input';

            this.grid = {};
            this.grid.parentElement = this.parentElement + ' div.grid';
            this.grid.fieldCells    = function(id)
            {
                return this.parentElement + ' th.column' + id
                     + ', '
                     + this.parentElement + ' td.column' + id;
            }
            this.grid.itemSelectors        = this.grid.parentElement + ' td.item-selector input';
            this.grid.itemCheckedSelectors = this.grid.itemSelectors+':checked';
        }
    },

    init: function(){
        var $ = jQuery;
        var grid = this;

        this.selectors.id = this.id;
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
            grid.edit(1);
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

    edit: function(id)
    {
        var $ = jQuery;

        if (id > 0)
        {
            var currentItem;
            $.each(this.items, function(i, item)
            {
                if (item.id == id)
                {
                    currentItem = item;
                }
            });
        }
        else
        {
            currentItem = defaultItem;
        }
       
        $("#editItemTemplate").tmpl({fields: this.fields, item: currentItem}).appendTo('div#' + this.id + ' div.edit-item');

        $(function() {
                // a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
                $( "#dialog:ui-dialog" ).dialog( "destroy" );

           /*     var name = $( "#name" ),
                    email = $( "#email" ),
                    password = $( "#password" ),
                    allFields = $( [] ).add( name ).add( email ).add( password ),
                    tips = $( ".validateTips" );

                function updateTips( t ) {
                    tips
                        .text( t )
                        .addClass( "ui-state-highlight" );
                    setTimeout(function() {
                        tips.removeClass( "ui-state-highlight", 1500 );
                    }, 500 );
                }

                function checkLength( o, n, min, max ) {
                    if ( o.val().length > max || o.val().length < min ) {
                        o.addClass( "ui-state-error" );
                        updateTips( "Length of " + n + " must be between " +
                            min + " and " + max + "." );
                        return false;
                    } else {
                        return true;
                    }
                }

                function checkRegexp( o, regexp, n ) {
                    if ( !( regexp.test( o.val() ) ) ) {
                        o.addClass( "ui-state-error" );
                        updateTips( n );
                        return false;
                    } else {
                        return true;
                    }
                }*/

                $( "#edititemform"+id ).dialog({
                    autoOpen: false,
                    height: 500,
                    width: 600,
                    modal: true,
                    buttons: [
                        {
                            text: "Save",
                            disabled: true,
                            click: function() { $(this).dialog("close"); }
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
                        allFields.val( "" ).removeClass( "ui-state-error" );
                    }
                });

            });
        $( "#edititemform"+id ).dialog( "open" );
    },

    getSelectedItemIds: function()
    {
        var $ = jQuery;

        var ids = {};
        $.each($(this.grid.itemCheckedSelectors), function(i, itemCheckedSelector) {
            //<td>
            var id = $(itemCheckedSelector).parent()
                //<tr>
                .parent()
                //<tr class="item${id}"> - class элемента содержит item id
                .attr('class');

            id = cms3.helper.removeIdPrefix(id, 'item');

            alert(id);

            ids[i] = id;
        });
    }
});