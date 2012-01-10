cms3.richGrid.fieldTypes.base = new Object();
cms3.extend(cms3.richGrid.fieldTypes.base, cms3.object, {
    display: true,
    cellTemplate: 'Default',
    cellContainerTemplate: 'Default',
    headTemplate: 'Default',
    filterTemplate: 'Default',
    titleGenerator: 'Default',
    showInList: false,
    ordering: true,
    defaultValue: '',
    filtration: {
        enabled: true
    },

    isChange: function(formId){
        var $ = jQuery;
        var overrideItem = $(this.selectors.editItems.editForm(formId) + ' div.cell-container.' + this.id + '-container' + ' div.override input');
        if (overrideItem.attr("checked"))
        {
            return true;
        }
        else
        {
            return false;
        }
    },

    getFormValue: function(formId){
        var $ = jQuery;

        var formItem = $(this.selectors.editItems.editForm(formId) + ' div.cell-container.' + this.id + '-container' + ' div.cell input');
        return formItem.val()
    },

    init: function() {
        this.buildSelectors();
    },

    createEvents: function(){
        var $ = jQuery;
        var field = this;
        var grid = this.grid;
        $(this.selectors.grid.fieldFilter[this.id].input).keyup(function(){
            grid.setFilters();
        });

        $(this.selectors.grid.field[this.id].sortButton).click(function(){

            var asc = $(field.selectors.grid.field[field.id].ascSymbol);
            var desc = $(field.selectors.grid.field[field.id].descSymbol);

            if (asc.is(':visible'))
            {
                grid.hideOrderings();
                desc.show();
            }
            else
            {
                grid.hideOrderings();
                asc.show();
            }

            grid.setOrdering();
            return false;
        });
    },

    buildSelectors: function() {
        if (typeof this.selectors.grid.fieldFilter == 'undefined')
        {
            this.selectors.grid.fieldFilter = new Object();
        }
        this.selectors.grid.fieldFilter[this.id] = new Object();
        this.selectors.grid.fieldFilter[this.id].input = this.selectors.grid.fieldFilters(this.id) + ' input';

        if (typeof this.selectors.grid.field == 'undefined')
        {
            this.selectors.grid.field = new Object();
        }
        this.selectors.grid.field[this.id] = new Object();
        this.selectors.grid.field[this.id].sortButton = this.selectors.grid.getField(this.id) + ' a.sort';
        this.selectors.grid.field[this.id].ascSymbol = this.selectors.grid.getField(this.id) + ' span.sort span.asc';
        this.selectors.grid.field[this.id].descSymbol = this.selectors.grid.getField(this.id) + ' span.sort span.desc';
    },

    filter: function(filter, cell) {
        /*var $ = jQuery;
        var specialChars = ['[', ']', '\\', '^', '$', '.' ,'|', '?', '*', '+', '(', ')', '{', '}'];
        $.each(specialChars, function(i, specialChar){
            var pos = 0;
            while ((pos = filter.indexOf(specialChar, pos+1)) != -1)
            {
                                
            }
        });*/

        if (cell.search(new RegExp(filter, "i")) == -1)
        {
            return false;
        }
        else
        {
            return true;
        }
    },

    getFilterValue: function() {
        var $ = jQuery;
        var filterElement = $(this.selectors.grid.fieldFilter[this.id].input);
        return filterElement.val();
    },

    isFilterSet: function() {
        if (this.getFilterValue() == '')
        {
            return false;
        }
        else
        {
            return true;
        }
    },

    sortASC: function (i, ii) { // По возрастанию
        if (i[gridfield.id] > ii[gridfield.id])
            return 1;
        else if (i[gridfield.id] < ii[gridfield.id])
            return -1;
        else
            return 0;
    },

    sortDESC: function (i, ii) { // По убыванию
        if (i[gridfield.id] > ii[gridfield.id])
            return -1;
        else if (i[gridfield.id] < ii[gridfield.id])
            return 1;
        else
            return 0;
    },

    isOrderingSet: function(){
        var $ = jQuery;
        var field = this;

        var asc = $(field.selectors.grid.field[field.id].ascSymbol);
        var desc = $(field.selectors.grid.field[field.id].descSymbol);

        if (asc.is(':visible'))
        {
            this.isSortASC = true;
            return true;
        }
        else
        {
            this.isSortASC = false;
            if (!desc.is(':visible'))
            {
                return false;
            }
            else
            {
                return true;
            }
        }
    },

    sRand: function () { // Случайная
        return Math.random() > 0.5 ? 1 : -1;
    },

    hideOrdering: function(){
        var $ = jQuery;
        $(this.selectors.grid.field[this.id].ascSymbol).hide();
        $(this.selectors.grid.field[this.id].descSymbol).hide();
    }
});