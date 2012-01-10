cms3.richGrid.fieldTypes.belongsto = {};
cms3.extend(cms3.richGrid.fieldTypes.belongsto, cms3.richGrid.fieldTypes.base, {
    cellTemplate: 'Belongsto',
    //headTemplate: 'Belongsto',
    //filterTemplate: 'Belongsto'
    //$('select.foo option:selected').val();

    init: function()
    {
        this.model = this.grid.models[this.modelName];
        //alert(this.model.);
        this.buildSelectors();
    },

    getFormValue: function(formId){
        var $ = jQuery;

        var formItem = $(this.selectors.editItems.editForm(formId) + ' div.cell-container.' + this.id + '-container' + ' div.cell option:selected');
        return formItem.val()
    }
});