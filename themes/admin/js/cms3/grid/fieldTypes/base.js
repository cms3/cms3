cms3.richGrid.fieldTypes.base = {
    display: true,
    cellTemplate: 'Default',
    cellContainerTemplate: 'Default',
    headTemplate: 'Default',
    filterTemplate: 'Default',
    filtration: {
        enabled: true
    },
    isChange: function(formId, fieldId, selectors){
        var $ = jQuery;
        var overrideItem = $(selectors.editItems.editForm(formId) + ' div.cell-container.' + fieldId + '-container' + ' div.override input');
        if (overrideItem.attr("checked"))
        {
            return true;
        }
        else
        {
            return false;
        }
    },

    getFormValue: function(formId, fieldId, selectors){
        var $ = jQuery;

        var formItem = $(selectors.editItems.editForm(formId) + ' div.cell-container.' + fieldId + '-container' + ' div.cell input');
        return formItem.val()
    },

    init: function() {

    },
    buildSelectors: function() {

    },
    sIncrease: function (i, ii) { // По возрастанию
        if (i > ii)
            return 1;
        else if (i < ii)
            return -1;
        else
            return 0;
    },

    sDecrease: function (i, ii) { // По убыванию
        if (i > ii)
            return -1;
        else if (i < ii)
            return 1;
        else
            return 0;
    },

    sRand: function () { // Случайная
        return Math.random() > 0.5 ? 1 : -1;
    }
};