cms3.helper = {
    removeIdPrefix: function(stringId, prefix)
    {
        var id = stringId.substring(prefix.length,(stringId.length+1));
        return id;
    },

    clone: function(obj)
    {
        if(obj == null || typeof(obj) != 'object')
            return obj;
        var temp = new obj.constructor();
        for(var key in obj)
            temp[key] = this.clone(obj[key]);
        return temp;
    }
};