cms3.form.field = new Object();
cms3.form.field.base = new Object();
cms3.extend(cms3.form.field.base, cms3.field.base, {
    templateCellEditable: 'base',
    templateCellFormContainer: 'base',
    value: '',
    html: {},

    init: function() {
        this.form = this.parentObject;
        this.cells = this.form.item[this.id];
        if (this.cells != undefined && this.cells.length == 1) {
            this.cell = this.cells[0];
        }

        this.value = this.cell;

        //this.buildSelectors();
    },

    buildSelectors: function() {
        //this.selectors.parentElement;
    },

    createEvents: function() {
        this.createHtmlElementObjects();
        this.createSelectAndUndoEvents();
    },

    createHtmlElementObjects: function() {
        var $ = jQuery;
        this.html.input = $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable input');
        this.html.cellsBlock = $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable-options');
        this.html.undoButton = $(this.selectors.form.parentElement + ' tr.' + this.id + ' td.undo div');
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

    getValue: function() {
        this.value = this.html.input.val();
        return this.value;
    },

    setValue: function(value) {
        this.html.input.val(value);
    }
});