cms3.richGrid.fieldTypes.boolean = {};
cms3.extend(cms3.richGrid.fieldTypes.boolean, cms3.richGrid.fieldTypes.base, {
    cellTemplate: 'Boolean',
    getFormValue: function(formId){
        var $ = jQuery;
        var formItem = $(this.selectors.editItems.editForm(formId) + ' div.cell-container.' + this.id + '-container' + ' div.cell input');
        if (formItem.attr("checked"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
});