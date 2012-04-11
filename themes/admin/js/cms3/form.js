cms3.form = new Object();
cms3.extend(cms3.form, cms3.fields, cms3.object, {
    id: 'form',

    init: function(){
        var $ = jQuery;
        var form = this;

        this.selectors.formId = this.id;
        this.selectors.build();

        //ссылки на текущую модель
        this.createFieldsObjects(null);

        $(this.container).append($("#cms3-template-form").tmpl({fields: this.fields, item: this.item, id: this.id}));
        cms3.each(this.fields, function(fieldId, field) {
            field.createEvents();
        });
    }
});