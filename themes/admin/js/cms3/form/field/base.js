cms3.form.field = new Object();
cms3.form.field.base = new Object();
cms3.extend(cms3.form.field.base, cms3.field.base, {
    templateCellEditable: 'base',
    templateCellFormContainer: 'base',

    init: function() {
        this.form = this.parentObject;
        this.cells = this.form.item[this.id];
        if (this.cells != undefined && this.cells.length == 1) {
            this.cell = this.cells[0];
        }

        this.buildSelectors();
    },

    buildSelectors: function() {
        this.selectors.parentElement;
    },

    createEvents: function() {
        var $ = jQuery;
        var field = this;

        $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable input').focus(function() {
            $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable-options').addClass('hover');
            console.log(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable-options');
            /*var hint = $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable input').hasClass('hint');
            if (hint)
            {
                $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable input').val('');
                $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable input').removeClass('hint');
            }*/
        });

        $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable input').blur(function() {
            $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable-options').removeClass('hover');

            /*if (field.getValue() == '') {
                $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable input').val(field.hint);
                $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable input').addClass('hint');
            }*/
        });

        if (this.cell == undefined) {
            var change = function () {
                $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable-options').hide();
                $(field.selectors.form.parentElement + ' tr.' + field.id + ' td.undo div').show();
            };

            $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable input').on('input', change);

            $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable input').keyup(function(event) {
                if (event.keyCode == 27 || event.keyCode == 46 || event.keyCode == 8) {
                    change();
                }
            });
        } else {
            $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable input').on('input', function() {
                if (field.value() != field.cell) {
                    $(field.selectors.form.parentElement + ' tr.' + field.id + ' td.undo div').show();
                } else {
                    $(field.selectors.form.parentElement + ' tr.' + field.id + ' td.undo div').hide();
                }
            });
        }


        $(field.selectors.form.parentElement + ' tr.' + field.id + ' td.undo div').click(function() {
            $(field.selectors.form.parentElement + ' tr.' + field.id + ' td.undo div').hide();
            if (field.cell == undefined) {
                $(field.selectors.form.parentElement + ' tr.' + field.id + ' div.cms3-field-editable-options').show();
                field.value('');
            } else {
                field.value(field.cell);
            }
        });
    },

    showHint: function() {
        this.value = $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable input').val();

        if (this.value == '') {

        }
    },

    getValue: this.value,

    value: function(value) {
        var $ = jQuery;
        if (value == undefined) {
            return $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable input').val();
        } else {
            return $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable input').val(value);
        }

    }

});