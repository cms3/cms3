cms3.field.base = new Object();
cms3.extend(cms3.field.base, cms3.htmlObject, {
    template: 'cms3-template-form-field-base',
    templateListItemGenerator: 'base',
    templateCellEditable: 'base',
    templateCellFormContainer: 'base',
    value: '',
    html: {},
    isChange: false,

    parentInit: cms3.htmlObject.init,

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

        this.parentInit();

        //this.buildSelectors();
    }

//{{tmpl({cells: field.cells, field: field, fieldId: fieldId}) '#cms3-template-form-field-'+field.templateCellFormContainer}}
});