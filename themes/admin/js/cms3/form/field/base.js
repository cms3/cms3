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


      /*  // редактирование
        if (id != 0) {
            cms3.each(ids, function(i, id) {
                cms3.each(grid.items, function(i, item) {
                    if (item.id == id) {
                        cms3.each(item, function(fieldId, cell) {
                            var different = true;
                            var n = 0;

                            if (currentItem[fieldId] == undefined) {
                                currentItem[fieldId] = new Array();
                            } else {
                                cms3.each(currentItem[fieldId], function(k, knownCell) {
                                    if (cell == knownCell) {
                                        different = false;
                                    }

                                    // get array number to add new cell variant
                                    n = k+1;
                                });
                            }

                            if (different) {
                                currentItem[fieldId][n] = cell;
                                // alert(n + '. ' + fieldId +': ' + cell);
                            }
                        });
                    }
                });
            });
            //новый
        } else {
            cms3.each(this.fields, function(fieldId, field) {
                currentItem[fieldId] = new Array();
                currentItem[fieldId][0] = field.defaultValue;
            });
        }*/
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