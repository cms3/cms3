cms3.form = new Object();
cms3.extend(cms3.form, cms3.fields, cms3.htmlObject, {
    template: 'cms3-template-form',

    childContainers: {
        fields: '.cms3-form'
    },

    parentAddChildren: cms3.htmlObject.addChildren,

    addChildren: function() {
        this.parentAddChildren();
        var form = this;

        var model = this.models[this.model];

        cms3.each(model.fields, function(fieldId, field){
            form.fields[fieldId] = form.addChild(fieldId, 'fields', cms3.field.base/*[field.type]*/, field);
        });

        /*this.absoluteChildContainers.fields.remove();
        this.absoluteChildContainers.fields.remove();

        this.htmlObject.remove();       */
    }
});