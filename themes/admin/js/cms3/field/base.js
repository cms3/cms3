cms3.field.base = new Object();
cms3.extend(cms3.field.base, cms3.htmlObject, {
    template: 'cms3-template-field-base-editable',
    templateListItemGenerator: 'base',
    templateCellEditable: 'base',
    templateCellFormContainer: 'base',
    childContainers: {
        autocomplete: '.cms3-autocomplete'
    },
    value: '',
    html: {},
    isChange: false,
    uniqueValues: new Array(),

    children: {
        autocomplete: {
            childObject: cms3.autocomplete,
            position: 'autocomplete',
            params: { }
        }
    },

    parentInit: cms3.htmlObject.init,

    init: function() {
        this.form = this.parentObject;
        this.parentInit();
    },

    parentBuildHtml: cms3.htmlObject.buildHtml,

    buildHtml: function() {
        this.setUniqueValues();
        this.parentBuildHtml();
        this.createHtmlElementObjects();
        this.createSelectAndUndoEvents();
        this.createAutocompleteEvents();
    },

    setUniqueValues: function() {
        var field = this;

        if (this.form.activeItems.length > 0) {
            cms3.each(this.form.activeItems, function(i, item) {
                if (cms3.inArray(item[field.id], field.uniqueValues) == -1) {
                    field.uniqueValues.push(item[field.id]);
                }
            });
        } else {
            this.uniqueValues.push(field.default);
        }

        return this.uniqueValues;
    },

    createHtmlElementObjects: function() {
        this.setInputObject();
        this.html.fieldBlock = this.htmlObject.find('.cms3-field-editable');
        this.html.cellsBlock = this.htmlObject.find('.cms3-field-editable-options');
        this.html.undoButton = this.htmlObject.find(' td.undo div');
    },

    setInputObject: function() {
        this.html.input = this.htmlObject.find('.cms3-field-editable input');
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
            if (field.uniqueValues.length > 1) {
                cellsBlock.hide();
                undoButton.show();
                field.isChange = true;
            } else {
                if (field.getValue() != field.uniqueValues[0]) {
                    undoButton.show();
                    field.isChange = true;
                } else {
                    undoButton.hide();
                    field.isChange = false;
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
            field.isChange = false;
            if (field.uniqueValues.length > 1) {
                cellsBlock.show();
                field.setValue('');
            } else {
                field.setValue(field.uniqueValues[0]);
            }
        });
    },

    createAutocompleteEvents: function()
    {
        this.html.input.on('input', $.proxy(this.showAutocomplete, this));
    },

    showAutocomplete: function() {
        var field = this;
        this.children.autocomplete.items = this.getAutocompleteItemsByTerm(this.getValue(), 10);
        this.children.autocomplete.reBuild();
        this.children.autocomplete.addEvent('selected', function() {
            field.setValue(this.items[this.index]);
            field.html.input.focus();
            field.showAutocomplete();
        });
    },

    getAutocompleteItemsByTerm: function(term, limit)
    {
        var field = this;
        var autocompleteValues = new Array();
        cms3.each(this.form.model.items, function(i, item){
            var value = item[field.id];
            if (field.filter(term, value)) {
                autocompleteValues.push(value);
            }

            if (autocompleteValues.length == limit) {
                return false;
            }
        });

        return autocompleteValues;
    },

    filter: function(filter, value) {
        if (value == null || value.search == undefined) {
            return false;
        }
        return value.search(new RegExp(filter, "i")) != -1;
    },

    getValue: function() {
        this.value = this.html.input.val();
        return this.value;
    },

    setValue: function(value) {
        this.html.input.val(value);
    }

//{{tmpl({cells: field.cells, field: field, fieldId: fieldId}) '#cms3-template-form-field-'+field.templateCellFormContainer}}
});