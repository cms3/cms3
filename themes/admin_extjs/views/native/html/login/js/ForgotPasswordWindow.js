var fogotPasswordWin;
			
if(!fogotPasswordWin){
		fogotPasswordWin = new Ext.create('widget.window', {
				title:'Восстановить  пароль',
				width:300,
				closable: false,
				items: fogotPasswordForm,
				resizable:false,
//				animateTarget: 'logo',
//				draggable:false,
				buttons:[{              // Кнопки окна
							text:'Отправить код восстановления',
							disabled: true,
							id:'fpbuttonOK',
							handler:function(){             // Функция, вызываемая при клике 
																			// по кнопке
									// Используем метод Ext.getCmp для поиска компонента 
									//  по его ID 
									var username = Ext.getCmp('username').getValue();
									var username = Ext.getCmp('username').getValue();
									
									
									var msg = Ext.Msg;
									msg.minWidth = 400; 
									// Выводим сообщение
									msg.alert('Сообщение обратной связи', 
											'Вы указали следующие данные:'+' Имя: '+ username+' Емейл: '+' Сообщение: ' ,
											function(){
													// Закрываем окно
													feedWin.close();        
											}
									);
									 
							}
						},
						{              // Кнопки окна
							text:'Отмена',
							id:'fpbuttonCancel',
							handler:function(){             // Функция, вызываемая при клике 
								fogotPasswordWin.hide();
								loginWin.show();
							}
								 
						}]
		});
}