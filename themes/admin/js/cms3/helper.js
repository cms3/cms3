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
    },

    each: function(array, func)
    {
        $ = jQuery;
        $.each(array, function(i, item){
           if (typeof item != 'undefined')
           {
               func(i, item);
           }
        });
    },

    previousItem: function(array, i){
        i--;
        while (typeof array[i] == 'undefined' && i != false)
        {
            i--;
            //alert(i);
        }
        return array[i];
    }
};

cms3.previousItem = cms3.helper.previousItem;
cms3.each = cms3.helper.each;