
cms3.richGrid.selectors = {
    build: function()
    {
        var $ = jQuery;
        var selectors = this;

        this.parentElement = 'div#' + this.gridId;

        this.editFieldList = {};
        this.editFieldList.parentElement  = this.parentElement + ' div.edit-field-list';
        this.editFieldList.Button         = this.editFieldList.parentElement;
        this.editFieldList.PopupWindow    = this.editFieldList.parentElement + ' div.popupwnd';
        this.editFieldList.fieldSelectors = this.editFieldList.parentElement + ' input';

        this.grid = {};
        this.grid.cellClassPrefix = 'column';
        this.grid.parentElement = this.parentElement + ' div.grid';
        this.grid.fields = this.grid.parentElement + ' tr.gridheader th';
        this.grid.getField = function(id)
        {
            return selectors.grid.fields + '.' + selectors.grid.cellClassPrefix + id;
        }
        this.grid.checkAll = this.grid.fields + '.check-all input';
        this.grid.fieldCells    = function(id)
        {
            return this.parentElement + ' th.' + this.cellClassPrefix + id
                 + ', '
                 + this.parentElement + ' td.' + this.cellClassPrefix + id;
        }

        this.grid.fieldFilters    = function(id)
        {
            return this.parentElement + ' tr.filter th.' + this.cellClassPrefix + id;
        }

        this.grid.item          = function(id)
        {
            return this.parentElement + ' tr.item' + id;
        }
        this.grid.items          = function(ids)
        {
            gridItems = new Array();
            $.each(ids, function(i, id){
                gridItems[i] = selectors.parentElement + ' tr.item' + id;
            });
            return gridItems.join(', ');
        }
        this.grid.allItems             = this.grid.parentElement + ' tr';
        this.grid.itemSelectors        = this.grid.parentElement + ' td.item-selector input';
        this.grid.itemSelectorsForIds  = function(ids)
        {
            itemSelectors = new Array();
            $.each(ids, function(i, id){
                itemSelectors[i] = selectors.parentElement + ' tr.item' + id + ' td.item-selector input';
            });
            return itemSelectors.join(', ');
        }
        this.grid.itemCheckedSelectors = this.grid.itemSelectors+':checked';
        this.grid.ajaxImagesForIds  = function(ids)
        {
            itemSelectors = new Array();
            $.each(ids, function(i, id){
                itemSelectors[i] = selectors.parentElement + ' tr.item' + id + ' td.item-selector img';
            });
            return itemSelectors.join(', ');
        }

        this.editItems = {};
        this.editItems.parentElement = this.parentElement + ' div.edit-items';

        var gridId = this.gridId;
        this.editItems.editForm      = function(id)
        {
            return '#' + gridId + '-window-'+id;
        }

        //this.grid.itemCheckedSelectors = this.grid.itemSelectors+':checked';
    }
};