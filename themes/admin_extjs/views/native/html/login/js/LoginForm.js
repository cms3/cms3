var loginForm = new Ext.FormPanel({
	// Элементы окна
	//xtype: 'form',          // тип элемента - форма
	border: false,
	url: '/action/cms3/auth/controller/login',
	id: 'loginform',
	bodyStyle: 'padding:15px; background:transparent',
	items:[new Ext.form.TextField({                        // Элементы формы
		//	xtype:'textfield',          // Текстовое поле
			fieldLabel:'Логин',
			id:'username',
			name:'username',
			allowBlank:false,
			blankText:'Введите логин.',
			msgTarget:'side',
			focus: true,
			anchor: '90%',
			minLength: 3,
			maxLength: 32,
			enableKeyEvents: true,
			listeners:{
					keyup:function(){       
							checkForm();
					}       
			}
	}),
	new Ext.form.TextField({       
		//	xtype:'textfield',              // Текстовое поле
			fieldLabel: 'Пароль',
			id:'password',
			name:'password',
			minLength: 6,
			maxLength: 32,
			msgTarget:'side',
			anchor: '90%',
			inputType: 'password',
			blankText:'Длинна пароля должна быть минимум 6 символов.',
			allowBlank:false,
			
							  // Маска ввода, иначе 
											//тип данных
			
			// Указываем что надо обрабатывать события клавишь. 
			//По умолчанию false
			enableKeyEvents: true,  
			listeners:{
					// Не будет обрабатываться keyup, если не 
					// указано enableKeyEvents: true
					keyup:function(){       
							checkForm();
					}       
			}
	}),
	new Ext.form.Label({
			//xtype:'label',
			html:'<div style="text-align:right; margin-right: 26px"><a href="#" id="forgotpassword">Забыли пароль?</a></div>'
	}),
	new Ext.form.Checkbox({
			//xtype:'checkbox',
			fieldLabel: 'Запомнить меня',
			id:'rememberme',
			name:'remember',
			checked: false
	}),
	{
		xtype: 'hidden',
		name: 'format',
		value: 'json'
	}
	,
	{
		xtype: 'hidden',
		name: 'return',
		value: 'L2FkbWlu'
	}
	]
});