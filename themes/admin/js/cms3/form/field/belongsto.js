cms3.form.field.belongsto = new Object();
cms3.extend(cms3.form.field.belongsto, cms3.field.belongsto, cms3.form.field.base, {
    templateCellEditable: 'select',
    parentInit: cms3.form.field.base.init
});