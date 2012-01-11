cms3.richGrid.field.belongsto = new Object();
cms3.extend(cms3.richGrid.field.belongsto, cms3.field.belongsto, cms3.richGrid.field.base, {
    cellTemplate: 'Belongsto',
    //headTemplate: 'Belongsto',
    //filterTemplate: 'Belongsto'
    //$('select.foo option:selected').val();

    parentInit: cms3.richGrid.field.base.init,

    getFormValue: function(formId){
        var $ = jQuery;

        var formItem = $(this.selectors.editItems.editForm(formId) + ' div.cell-container.' + this.id + '-container' + ' div.cell option:selected');
        return formItem.val()
    }
});