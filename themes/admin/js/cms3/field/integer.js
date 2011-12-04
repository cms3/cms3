cms3.field.integer = {};
cms3.extend(cms3.field.integer, cms3.field.base, {
    defaultValue: 0,
    sortASC: function (i, ii) { // По возрастанию
        return i[gridfield.id] - ii[gridfield.id];
    },

    sortDESC: function (i, ii) { // По возрастанию
        return ii[gridfield.id] - i[gridfield.id];
    }
});