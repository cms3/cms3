cms3.array = {};
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
                cms3.each(this[type], function(i, fn){
                    fn(data);
                });
            }
        }
    }
});