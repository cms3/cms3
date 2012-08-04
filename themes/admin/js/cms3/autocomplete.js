cms3.autocomplete = new Object();
cms3.extend(cms3.autocomplete, cms3.htmlObject, {
    template: 'cms3-template-autocomplete',
    items: [],
    html: {},
    parentBuildHtml: cms3.htmlObject.buildHtml,
    index: -1,

    buildHtml: function() {
        var autocomplete = this;
        var $ = jQuery;

        if (this.items.length > 0) {
            this.parentBuildHtml();
            this.index = -1;
            this.html.liBlocks = this.htmlObject.find('li');

            this.html.liBlocks.mouseover(function(){
                $(this).addClass('hover');
            });

            this.html.liBlocks.mouseleave(function(){
                $(this).removeClass('hover');
            });

            this.html.liBlocks.click(function() {
                autocomplete.index = cms3.getIdFromClass($(this).attr('class'), 'select');
                autocomplete.triggerEvent('selected');
            });

            this.addHtmlEvent('keyup', 'body', function(event) {
                var down = event.keyCode == 40 ? 1 : 0;
                var up   = event.keyCode == 38 ? 1 : 0;
                var indexChange = down - up;
                var newIndex = this.index + indexChange;

                if (indexChange) {
                    if (newIndex < 0) {
                        newIndex = 0;
                    }
                    if (newIndex >= this.items.length) {
                        newIndex = this.items.length - 1;
                    }

                    this.html.liBlocks.removeClass('hover');
                    jQuery(this.html.liBlocks.get(this.index)).addClass('hover');
                }
            });

            this.addHtmlEvent('click', 'body', this.hide);
        }
    },

    hide: function() {
        this.htmlObject.hide();
        this.removeAllHtmlEvents();
    }
});