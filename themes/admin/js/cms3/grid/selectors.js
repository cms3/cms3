
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
        this.grid.parentElement = this.parentElement + ' div.grid';
        this.grid.fieldCells    = function(id)
        {
            return this.parentElement + ' th.column' + id
                 + ', '
                 + this.parentElement + ' td.column' + id;
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
            return '#cms3-rich-grid-' + gridId + '-edit-from-'+id;
        }

        //this.grid.itemCheckedSelectors = this.grid.itemSelectors+':checked';
    }
};