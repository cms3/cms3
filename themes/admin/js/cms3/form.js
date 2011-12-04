cms3.form = new Object();
cms3.extend(cms3.form, cms3.object, {
    id: 'form',

    fields: {
        "id":{
            "default":null,
            "filtration":[],
            "label":"id",
            "name":"id",
            "type":"primary"
        },
        "user":{
            "default":0,
            "filtration":[],
            "label":"user",
            "name":"user",
            "selectType":"list",
            "type":"belongsto",
            "modelName":"cms3-auth-user"
        }
    },

    init: function(){
        var $ = jQuery;
        var form = this;

        $(this.container).append($("#cms3-template-form").tmpl(this));

        /*cms3.each(this.fields, function(fieldId, field){
           field.id = fieldId;
           /*field.selectors = grid.selectors;*/
           /*field.grid = grid;*/
          /* form.model.fields[fieldId] = cms3.field[field.type].create(field);
           // Если нужно будет строить список моделей автоматически
           /*if (field.model != undefined){
               grid.createFieldsObjects(field.model.fields);
           }*/
        //});
    }
});