cms3.form.field = new Object();
cms3.form.field.base = new Object();
cms3.extend(cms3.form.field.base, cms3.field.base, {
    templateCellEditable: 'base',
    templateCellFormContainer: 'base',
    value: '',
    html: {},
    isChange: false,

    init: function() {
        this.form = this.parentObject;
        var field = this;
        var activeItems = this.form.activeItems;

        var cells = new Array();
        var n = 0;
        if (activeItems.length > 0) {
            cms3.each(activeItems, function(i, item) {
                var different = true;
                cms3.each(cells, function(i, cell) {
                    if (cell === item[field.id]) {
                        different = false;
                    }
                });

                if (different) {
                    cells[n] = item[field.id];
                    n++;
                }
            });
        } else {
            cells[0] = field.default;
        }

        this.cells = cells;

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
        this.setInputObject();
        this.html.cellsBlock = $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable-options');
        this.html.undoButton = $(this.selectors.form.parentElement + ' tr.' + this.id + ' td.undo div');
    },

    setInputObject: function() {
        var $ = jQuery;
        this.html.input = $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable input');
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
                field.isChange = true;
            } else {
                if (field.getValue() != field.cell) {
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