cms3.window = new Object();
cms3.extend(cms3.window, cms3.object, {
    id: 'window',
    windowState: 'maximized',
    caption: '',
    container: 'body',
    
    width: '500',
    height: 'auto',
    left: '10',
    top: '10',

    init: function(){
        var $ = jQuery;
        var window = this;

        $(this.container).append($("#cms3-template-window").tmpl(this));
        /*window.minimized();*/
        $('div#' + this.id + ' div.cms3-window-head-buttons span.normal').click(function(e){
            window.normalize();
        });
        
        $('div#' + this.id + ' div.cms3-window-head-buttons span.maximized').click(function(e){
            window.maximized();
        });

        $('div#' + this.id + ' div.cms3-window-head-buttons span.close').click(function(e){
            window.close();
        });
    },

    drag: function(){
        var $ = jQuery;
        var window = this;
        
        $('div#' + this.id + ' div.cms3-window-head').on('mousedown', function(e){
            var x = e.pageX;
            var y = e.pageY;

            $('body').mousemove(function(e){
                var x1 = e.pageX;
                var y1 = e.pageY;

                window.left = window.left*1 + x1 - x;
                window.top = window.top*1 + y1 - y;
                x = x1;
                y = y1;

                window.position();

                return false;
            });

            $('body').mouseup(function(){
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

        $('div#' + this.id).removeClass('maximized');
        $('div#' + this.id).addClass('normal');

        $('div#' + this.id).width(this.width);

        if (this.height != 'auto')
            $('div#' + this.id).height(this.height);

        this.position();
        this.drag();
    },

    maximized: function(){
        var $ = jQuery;

        $('div#' + this.id).removeAttr("style")
        $('div#' + this.id).addClass('maximized');
        $('div#' + this.id).removeClass('normal');
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

    children: [
        {
            
        }
    ],

    close: function(){
        var $ = jQuery;
        $('div#' + this.id).remove();
        delete this;
    }
});