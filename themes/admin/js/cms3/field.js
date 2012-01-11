cms3.field = {
    createFieldsObjects: function(model) {
        var object = this;
        var fields = new Object();

        fields = cms3.clone(model.fields);

        cms3.each(fields, function(fieldId, field) {
            field.id = fieldId;
            field.selectors = object.selectors;
            field.parentObject = object;
            //field = fields[fieldId];
            if (field.modelName != undefined && field.model == undefined) {
                field.model = new Object();
                field.model.items = object.models[field.modelName].items;
                field.model.fields = object.createFieldsObjects(object.models[field.modelName]);

            }
            fields[fieldId] = object.field[field.type].create(field);
        });

        return fields;
    }
};