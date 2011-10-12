Ext.define('Ext.ux.Portlet', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.portlet',
    layout: 'fit',
    anchor: '100%',
    frame: true,
    closable: true,
    collapsible: true,
    animCollapse: true,
    draggable: true,
    cls: 'x-portlet',
	
	items: [
		{
			height: 90,
            html: 'Some Data'
		}
	],

    doClose: function() {
        this.el.animate({
            opacity: 0,
            callback: function(){
                this.fireEvent('close', this);
                this[this.closeAction]();
            },
            scope: this
        });
    }
});

Ext.define('Ext.ux.PortalColumn', {
    extend: 'Ext.container.Container',
    alias: 'widget.portalcolumn',
    layout: {
        type: 'anchor',
        afterLayout: function() {
            this.owner.el.setHeight(null);
        }
    },
    defaultType: 'portlet',
    cls: 'x-portal-column',
    autoHeight: true
});

Ext.define('Ext.ux.PortalPanel', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.portalpanel',
	
    autoScroll : true,
    cls: 'x-portal',
    defaultType: 'portalcolumn',
    defaults: {
        margins: '0 8 0 0'
    },

    initComponent : function(){
        this.layout = {
            type : 'hbox',
            clearInnerCtOnLayout: true,
            afterLayout: Ext.bind(this.adjustInnerSize, this),
            padding: '8 0 0 8'
        };
        Ext.ux.PortalPanel.superclass.initComponent.call(this);

        this.addEvents({
            validatedrop: true,
            beforedragover: true,
            dragover: true,
            beforedrop: true,
            drop: true
        });
        
        this.on('drop', Ext.isIE ? this.doLayout : this.adjustInnerSize, this);
    },
    
    adjustInnerSize: function() {
        var layout = this.getLayout(),
            innerHeight = layout.getLayoutTargetSize().height,
            newHeight = innerHeight,
            items = layout.getVisibleItems(),
            len = items.length,
            i = 0, h = 0;

        for (; i < len; i++) {
            h = items[i].getHeight();
            newHeight = Math.max(newHeight, h);
        }
        if(newHeight > innerHeight){
            newHeight += 15; // we're going to scroll so pad the bottom a little
        }
        layout.innerCt.setHeight(newHeight);
    },
    
    // private
    initEvents : function(){
        Ext.ux.PortalPanel.superclass.initEvents.call(this);
        this.dd = new Ext.ux.PortalDropZone(this, this.dropConfig);
    },

    // private
    beforeDestroy : function() {
        if(this.dd){
            this.dd.unreg();
        }
        Ext.ux.PortalPanel.superclass.beforeDestroy.call(this);
    }
});

Ext.define('Ext.ux.PortalDropZone', {
    extend: 'Ext.dd.DropTarget',

    constructor : function(portal, cfg){
        this.portal = portal;
        Ext.dd.ScrollManager.register(portal.body);
        Ext.ux.PortalDropZone.superclass.constructor.call(this, portal.body, cfg);
//        portal.body.ddScrollConfig = this.ddScrollConfig;
    },

// TODO: Re-enable this after Ext.lib.Anim is working
//    ddScrollConfig : {
//        vthresh: 50,
//        hthresh: -1,
//        animate: true,
//        increment: 200
//    },

    createEvent : function(dd, e, data, col, c, pos){
        return {
            portal: this.portal,
            panel: data.panel,
            columnIndex: col,
            column: c,
            position: pos,
            data: data,
            source: dd,
            rawEvent: e,
            status: this.dropAllowed
        };
    },
    
    notifyOver : function(dd, e, data){
        var xy = e.getXY(), 
            portal = this.portal, 
            proxy = dd.proxy;

        // case column widths
        if(! this.grid){
            this.grid = this.getGrid();
        }

        // handle case scroll where scrollbars appear during drag
        var cw = portal.body.dom.clientWidth;
        if(!this.lastCW){
            // set initial client width
            this.lastCW = cw;
        }
        else if(this.lastCW != cw){
            // client width has changed, so refresh layout & grid calcs
            this.lastCW = cw;
            //portal.doLayout();
            this.grid = this.getGrid();
        }

        // determine column
        var colIndex = 0,
            colRight = 0, 
            cols = this.grid.columnX,
            len = cols.length, 
            cmatch = false;
            
        for(len; colIndex < len; colIndex++){
            colRight = cols[colIndex].x + cols[colIndex].w;
            if(xy[0] < colRight){
                cmatch = true;
                break;
            }
        }
        // no match, fix last index
        if(!cmatch){
            colIndex--;
        }

        // find insert position
        var p, pos = 0, h = 0,
            match = false,
            col = portal.items.getAt(colIndex),
            portlets = col.items.items,
            overSelf = false;
        
        len = portlets.length;

        for(len; pos < len; pos++){
            p = portlets[pos];
            h = p.el.getHeight();
            if(h === 0){
                overSelf = true;
            }
            else if((p.el.getY()+(h/2)) > xy[1]){
                match = true;
                break;
            }
        }

        pos = (match && p ? pos : col.items.getCount()) + (overSelf ? -1 : 0);
        var overEvent = this.createEvent(dd, e, data, colIndex, col, pos);
        
        if(portal.fireEvent('validatedrop', overEvent) !== false &&
           portal.fireEvent('beforedragover', overEvent) !== false){
            
            // make sure proxy width is fluid in different width columns
            proxy.getProxy().setWidth('auto');

            if(p){
                proxy.moveProxy(p.el.dom.parentNode, match ? p.el.dom : null);
            }
            else{
                proxy.moveProxy(col.el.dom, null);
            }

            this.lastPos = {c: col, col: colIndex, p: overSelf || (match && p) ? pos : false};
            this.scrollPos = portal.body.getScroll();

            portal.fireEvent('dragover', overEvent);
            return overEvent.status;
        }
        else{
            return overEvent.status;
        }

    },

    notifyOut : function(){
        delete this.grid;
    },

    notifyDrop : function(dd, e, data){
        delete this.grid;
        if(!this.lastPos){
            return;
        }
        var c = this.lastPos.c,
            col = this.lastPos.col,
            pos = this.lastPos.p,
            panel = dd.panel,
            dropEvent = this.createEvent(dd, e, data, col, c,
                pos !== false ? pos : c.items.getCount());

        if(this.portal.fireEvent('validatedrop', dropEvent) !== false &&
           this.portal.fireEvent('beforedrop', dropEvent) !== false){

            // make sure panel is visible prior to inserting so that the layout doesn't ignore it
            panel.el.dom.style.display = '';

            if(pos !== false){
                c.insert(pos, panel);
            }else{
                c.add(panel);
            }

            dd.proxy.hide();
            this.portal.fireEvent('drop', dropEvent);

            // scroll position is lost on drop, fix it
            var st = this.scrollPos.top;
            if(st){
                var d = this.portal.body.dom;
                setTimeout(function(){
                    d.scrollTop = st;
                }, 10);
            }

        }
        delete this.lastPos;
        return true;
    },

    // internal cache of body and column coords
    getGrid : function(){
        var box = this.portal.body.getBox();
        box.columnX = [];
        this.portal.items.each(function(c){
             box.columnX.push({x: c.el.getX(), w: c.el.getWidth()});
        });
        return box;
    },

    // unregister the dropzone from ScrollManager
    unreg: function() {
        Ext.dd.ScrollManager.unregister(this.portal.body);
        Ext.ux.PortalDropZone.superclass.unreg.call(this);
    }
});