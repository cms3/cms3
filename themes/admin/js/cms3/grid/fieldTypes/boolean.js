cms3.richGrid.fieldTypes.boolean = {};
cms3.extend(cms3.richGrid.fieldTypes.boolean, cms3.richGrid.fieldTypes.base, {
    cellTemplate: 'Boolean',
    getFormValue: function(formId, fieldId, selectors){
        var $ = jQuery;
        var formItem = $(selectors.editItems.editForm(formId) + ' div.cell-container.' + fieldId + '-container' + ' div.cell input');
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