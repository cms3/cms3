cms3.object = {};
cms3.extend(cms3.object, cms3.params, {
    create: function(userData) {
        var object = new Object();
        cms3.extend(object, cms3.clone(this), userData);
        object.init();
        return object;
    },

    init: function(){},

    extend: jQuery.extend,

    event: {
        add: function(type, fn) {
            if (this[type] != undefined) {

            }
        },
    
        remove: function(type, fn) {
            
        },
        
        trigger: function(type, data) {
            if (this[type] != undefined) {
                cms3.each(this[type], function(i, fn) {
                    fn(data);
                });
            }
        }
    }
});

cms3.extend = cms3.object.extend;