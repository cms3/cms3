cms3.fields = {
    fields: {},

    createFieldsObjects: function(model) {
        var object = this;
        var fields = new Object();
        if (model == null) {
            var model = this.models[this.model];
            fields = cms3.clone(model.fields);
            this.fields = fields;
        } else {
            fields = cms3.clone(model.fields);
        }

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
            if (object.field[field.type] != undefined) {
                fields[fieldId] = object.field[field.type].create(field);
            } else {
                fields[fieldId] = object.field.base.create(field);
            }

        });

        return fields;
    }
};