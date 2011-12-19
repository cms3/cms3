cms3.richGrid.field.primary = new Object();
cms3.extend(cms3.richGrid.field.primary, cms3.field.primary, cms3.richGrid.field.base, {
    display: false,
    defaultValue: 0,
    cellTemplate: 'Primary',
    cellContainerTemplate: 'Primary',
    isChange: function(formId){
        return false;
    }
});