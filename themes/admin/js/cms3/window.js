cms3.window = new Object();
cms3.extend(cms3.window, cms3.htmlObject, {
    id: 'window',
    windowState: 'normal',
    label: '',
    container: 'body',
    childContainers: {
        content: 'div.cms3-window-content',
        buttons: 'div.cms3-window-buttons'
    },
    template: 'cms3-template-window',
    
    width: '500',
    height: 'auto',
    left: '10',
    top: '10',

    parentBuildHtml: cms3.htmlObject.buildHtml,

    buildHtml: function() {
        this.parentBuildHtml();

        var $ = jQuery;
        var win = this;

        switch (this.windowState) {
            case 'maximized':
                this.maximize();
                break
            default:
                this.normalize();
        }

        $('div#' + this.id + ' div.cms3-window-head-buttons span.normal').click(function(e){
            win.normalize();
        });

        $('div#' + this.id + ' div.cms3-window-head-buttons span.maximized').click(function(e){
            win.maximize();
        });

        $('div#' + this.id + ' div.cms3-window-head-buttons span.close').click(function(e){
            win.close();
        });
    },

    drag: function(){
        var $ = jQuery;
        var win = this;
        
        $('div#' + this.id + ' div.cms3-window-head').on('mousedown', function(e){
            var x = e.pageX;
            var y = e.pageY;

            $(document).mousemove(function(e){
                var x1 = e.pageX;
                var y1 = e.pageY;

                win.left = win.left*1 + x1 - x;
                win.top = win.top*1 + y1 - y;
                x = x1;
                y = y1;

                win.position();

                return false;
            });

            $(document).mouseup(function(){
                $(this).off('mousemove');
                $(this).off('mouseup');
                return false;
            });

            return false;
        });
    },

    unDrag: function(){
        $('div#' + this.id + ' div.cms3-window-head').off('mousedown');
    },

    normalize: function(){
        var $ = jQuery;

        this.htmlObject.removeClass('maximized');
        this.htmlObject.addClass('normal');

        this.htmlObject.width(this.width);

        if (this.height != 'auto') {
            this.htmlObject.height(this.height);
        }

        this.position();
        this.drag();
    },

    maximize: function(){
        this.htmlObject.removeAttr("style")
        this.htmlObject.addClass('maximized');
        this.htmlObject.removeClass('normal');
        this.unDrag();
    },

    position: function(left, top){
        if (left != undefined)
            this.left = left;
        if (top != undefined)
            this.top = top;

        $('div#' + this.id).css('left',this.left+'px');
        $('div#' + this.id).css('top',this.top+'px');
    },

    close: function(){
        this.triggerEvent('close');
        this.htmlObject.remove();
    }
});