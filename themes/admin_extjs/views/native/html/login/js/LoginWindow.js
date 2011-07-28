var loginWin;
			
if(!loginWin){
		loginWin = new Ext.create('widget.window', {
				title:'Вход в систему',
				width:300,
				closable: false,
				items: loginForm,
				resizable: false,
				//animateTarget: 'logo',
//				draggable:false,
				buttons:[{              // Кнопки окна
						text:'Вход',
						disabled: true,
						id:'buttonOK',
						handler:function(){             // Функция, вызываемая при клике 
																		// по кнопке
								// Используем метод Ext.getCmp для поиска компонента 
								//  по его ID 
								var username = Ext.getCmp('username').getValue();
								var password = Ext.getCmp('password').getValue();
								
								loginForm.getForm().submit({
                                            waitMsg: 'Processing Request',
											url: '/action/cms3/auth/controller/login',
                                            success: function(loginForm, resp){
                                            /*
                                                Ext.getCmp('username').reset();
												Ext.getCmp('password').reset();
												Ext.getCmp('rememberme').reset();
												loginWin.hide();
											*/
												location.href = resp.result['return'];
                                            },
											failure: function(loginForm, resp){
                                                Ext.Msg.alert('Ошибка', resp.result.errors.text);
												Ext.getCmp('password').reset();
												Ext.getCmp('buttonOK').setDisabled(true);
												
												/*
												var answer = eval('(' + resp.response.responseText + ')');
												alert(answer.errors.text)*/
												
												
												/*var displayLine;
												for (var prop in resp) {
													displayLine =resp.name+"."+prop+"="+resp[prop];
													alert(displayLine);
												}*/

											}
                                       });
								
								/*Ext.Ajax.request({
								   url: 'php/login.php',
								   success: function() {
											alert('suceess');
										},
									failure: function() {
											alert('sucs');
										},
								   headers: {
									   'my-header': 'foo'
								   },
								   params: { foo: 'bar' }
								});*/
								 
						}
				}]
		});
}