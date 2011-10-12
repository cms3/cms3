cms3.object = {};
cms3.extend(cms3.object, cms3.params, {
    getObject: function(userData) {
        var object = {};
        this.extend(object, this, userData);
        return object;
    },

    create: function(userData){
        var object = this.getObject(userData);
        object.init();
        return object;
    },

    extend: jQuery.extend
});

cms3.extend = cms3.object.extend;