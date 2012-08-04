cms3.htmlObject = {};
cms3.extend(cms3.htmlObject, cms3.object, {
    id: '',

    parentCreate: cms3.object.create,
    create: function(userData) {
        var obj = this.parentCreate(userData);
        obj.build();

        return obj;
    },

    build: function() {
        this.buildHtml();
        this.addEvents();
        this.addChildren();
    },

    reBuild: function() {
        this.remove();
        this.build();
    },

    buildHtml: function() {
        var $ = jQuery;
        if (this.container != undefined){
            this.container.append($('#' + this.template).tmpl(this));

            this.htmlObject = this.container.children(':last-child');
        }

        //this.setHtmlObject();
        this.setAbsoluteChildContainers();
    },

    htmlObject: {},
    setHtmlObject: function() {
        var $ = jQuery;
        this.htmlObject = $('#' + this.id);
    },

    childContainers: {},
    absoluteChildContainers: {},

    setAbsoluteChildContainers: function() {
        var obj = this;
        cms3.each(this.childContainers, function(containerName, containerSelector){
            obj.absoluteChildContainers[containerName] = obj.htmlObject.find(containerSelector);
        });
    },

    events: {},

    addEvent: function(name, func) {
        var $ = jQuery;
        this.htmlObject.on(name, $.proxy(func, this));
    },

    triggerEvent: function(name) {
        this.htmlObject.trigger(name);
    },

    addEvents: function() {
        var obj = this;

        cms3.each(this.events, function(eventName, eventFunction){
            obj.addEvent(eventName, eventFunction);
        });
    },

    children: {},

    addChild: function(name, containerName, childObject, userData) {
        userData.container = this.absoluteChildContainers[containerName];
        userData.parentObject = this;
        this.children[name] = childObject.create(userData);
        return this.children[name];
    },

    addChildren: function() {
        var obj = this;
        cms3.each(this.children, function(childName, childData){
            if (childData.params != undefined) {
                obj.addChild(childName, childData.position, childData.childObject, childData.params);
            }
        });
    },

    htmlEvents: [],

    addHtmlEvent: function(eventName, selector, eventFunction) {
        eventFunction = jQuery.proxy(eventFunction, this);
        if (jQuery(selector).on(eventName, eventFunction)) {
            this.htmlEvents.push({
                eventName: eventName,
                selector: selector,
                eventFunction: eventFunction
            });
            return true;
        }
        return false;
    },

    removeHtmlEvent: function(eventName, selector, eventFunction) {
        return jQuery(selector).off(eventName, eventFunction);
    },

    removeAllHtmlEvents: function() {
        var object = this;
        cms3.each(this.htmlEvents, function(i, htmlEvent) {
            object.removeHtmlEvent(htmlEvent.eventName, htmlEvent.selector, htmlEvent.eventFunction)
        });
    },

    remove: function() {
        if (this.htmlObject.length) {
            this.htmlObject.remove();
        }
        console.log('removeAllHtmlEvents');
        this.removeAllHtmlEvents();
    }
});