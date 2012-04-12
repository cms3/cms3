cms3.htmlObject = {};
cms3.extend(cms3.htmlObject, cms3.object, {
    parentCreate: cms3.object.create,

    id: '',

    create: function(userData) {
        var obj = this.parentCreate(userData);
        obj.buildHtml();
        obj.addEvents();
        obj.addChildren();

        return obj;
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
        this.htmlObject.on(name, func);
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
            obj.addChild(childName, childData.position, childData.childObject, childData.params);
        });
    }
});