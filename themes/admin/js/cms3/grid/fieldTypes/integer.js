cms3.richGrid.fieldTypes.integer = {};
cms3.extend(cms3.richGrid.fieldTypes.integer, cms3.richGrid.fieldTypes.base, {
    defaultValue: 0,
    sortASC: function (i, ii) { // По возрастанию
        return i[gridfield.id] - ii[gridfield.id];
    },

    sortDESC: function (i, ii) { // По возрастанию
        return ii[gridfield.id] - i[gridfield.id];
    }
});