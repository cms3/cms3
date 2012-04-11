cms3.object = {};
cms3.extend(cms3.object, cms3.params, {
    create: function(userData) {
        var obj = new Object();
        cms3.extend(obj, cms3.clone(this), userData);
        obj.init();

        return obj;
    },

    init: function(){},

    extend: jQuery.extend
});

cms3.extend = cms3.object.extend;