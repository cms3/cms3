cms3.richGrid.fieldTypes.primary = {};
cms3.extend(cms3.richGrid.fieldTypes.primary, cms3.richGrid.fieldTypes.base, {
    display: false,
    cellTemplate: 'Primary',
    cellContainerTemplate: 'Primary',
    isChange: function(formId){
        return false;
    }
});