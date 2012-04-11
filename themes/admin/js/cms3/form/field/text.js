cms3.form.field.text = new Object();
cms3.extend(cms3.form.field.text, cms3.field.text, cms3.form.field.base, {
    templateCellEditable: 'textarea',

    setInputObject: function() {
        var $ = jQuery;
        this.html.input = $(this.selectors.form.parentElement + ' tr.' + this.id + ' div.cms3-field-editable textarea');
    }
});