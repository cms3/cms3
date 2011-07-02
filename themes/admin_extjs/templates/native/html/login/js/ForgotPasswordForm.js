var fogotPasswordForm = new Ext.FormPanel({
	// Элементы окна
	xtype: 'form',          // тип элемента - форма
	border: false,
	bodyStyle: 'padding:15px; background:transparent',
	items:[
			{
				xtype:'label',
				text: 'Введите Email, указанный при регистрации.'
			},
			{                        // Элементы формы
			xtype:'textfield',          // Текстовое поле
			fieldLabel:'Email',
			id:'email',
			vtype:'email',
			allowBlank:false,
			blankText:'Введите Email.',
			msgTarget:'side',
			focus: true,
			anchor: '90%',
			enableKeyEvents: true,
			listeners:{
					keyup:function(){       
							checkFogotPasswordForm();
					}       
			}
	}]
});