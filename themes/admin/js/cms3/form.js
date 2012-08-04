cms3.form = new Object();
cms3.extend(cms3.form, cms3.fields, cms3.htmlObject, {
    template: 'cms3-template-form',

    childContainers: {
        fields: '.cms3-form tbody'
    },

    parentAddChildren: cms3.htmlObject.addChildren,

    addChildren: function() {
        this.parentAddChildren();
        var form = this;

        this.model = this.models[this.model];

        cms3.each(this.model.fields, function(fieldId, field){
            field.id = fieldId;
            form.fields[fieldId] = form.addChild(fieldId, 'fields', cms3.field[field.type], field);
        });

        /*this.absoluteChildContainers.fields.remove();
        this.absoluteChildContainers.fields.remove();

        this.htmlObject.remove();       */
    }
});