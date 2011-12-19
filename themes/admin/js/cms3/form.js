cms3.form = new Object();
cms3.extend(cms3.form, cms3.object, {
    id: 'form',

    fields: {},

    createFieldsObjects: cms3.field.createFieldsObjects,

    init: function(){
        var $ = jQuery;
        var form = this;

        console.log(this);

        this.selectors.formId = this.id;
        this.selectors.build();

        //ссылки на текущую модель
        this.fields = this.createFieldsObjects(this.models[this.model]);

        $(this.container).append($("#cms3-template-form").tmpl({fields: this.fields, item: this.item, id: this.id}));

        cms3.each(this.fields, function(fieldId, field){
            field.createEvents();
        });
    }
});