cms3.richGrid.fieldTypes.primary = {};
cms3.extend(cms3.richGrid.fieldTypes.primary, cms3.richGrid.fieldTypes.base, {
    display: false,
    defaultValue: 0,
    cellTemplate: 'Primary',
    cellContainerTemplate: 'Primary',
    isChange: function(formId){
        return false;
    }
});