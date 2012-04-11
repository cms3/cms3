cms3.form.field.belongsto = new Object();
cms3.extend(cms3.form.field.belongsto, cms3.field.belongsto, cms3.form.field.base, {
    templateCellEditable: 'select',

    parentInit: cms3.form.field.base.init,

    init: function() {
        this.parentInit();
    },

    createEvents: function() {
        var $ = jQuery;
        var field = this;

        this.createHtmlElementObjects();
        this.createSelectAndUndoEvents();

        $(field.selectors.form.parentElement + ' tr.' + field.id + ' td.select-button').click(function(e) {
            var fieldElement = $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable');
            var showAutocompleteClass = 'show-autocomplete';

            var hideAutocomplete = function(){
                fieldElement.removeClass(showAutocompleteClass);
                $(document).off('click', hideAutocomplete);
            };

            if (fieldElement.hasClass(showAutocompleteClass)) {
                hideAutocomplete();
            } else {
                fieldElement.addClass(showAutocompleteClass);
                $(document).click(hideAutocomplete);
            }

            e.stopPropagation();
        });

        $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.autocomplete li').mouseover(function(){
            $(this).addClass('hover');
        });

        $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.autocomplete li').mouseout(function(){
            $(this).removeClass('hover');
        });

        $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.autocomplete li').click(function(){
            field.setValue(cms3.getIdFromClass($(this).attr('class'), 'select'), $(this).html());
        });
    },

    createSelectAndUndoEvents: function() {
        var $ = jQuery;
        var field = this;

        var input = this.html.input;
        var cellsBlock = this.html.cellsBlock;
        var undoButton = this.html.undoButton;

        input.focus(function() {
            cellsBlock.addClass('hover');
        });

        input.blur(function() {
            cellsBlock.removeClass('hover');
        });

        var change = function () {
            if (field.cells.length > 1) {
                cellsBlock.hide();
                undoButton.show();
            } else {
                if (field.getValue() != field.cell) {
                    undoButton.show();
                } else {
                    undoButton.hide();
                }
            }
        };

        input.on('input', change);

        input.keyup(function(event) {
            if (event.keyCode == 27 || event.keyCode == 46 || event.keyCode == 8) {
                change();
            }
        });

        undoButton.click(function() {
            undoButton.hide();
            if (field.cells.length > 1) {
                cellsBlock.show();
                field.setValue('');
            } else {
                field.setValue(field.cell);
            }
        });
    },

    setValue: function(value, caption) {
        var $ = jQuery;

        var field = this;
        if (caption == null) {
            cms3.each(field.model.items, function(fieldId, item) {
                if (item.id == value) {
                    caption = $('#cms3-template-field-list-item-generator-'+field.templateListItemGenerator).tmpl({item: item, fields: field.model.fields})[0].data;
                }
            });
        }

        this.html.input.val(caption);
        $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.autocomplete li.select' + this.value).show();
        $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.autocomplete li.select' + value).hide();

        this.value = value;
    },

    getValue: function() {
        return this.value;
    },

    showAutocomplete: function(){

    },

    hideAutocomplete: function(){

    }
});