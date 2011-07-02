// Данную функцию будем использовать для проверки заполненности формы
checkForm = function(){
		var username = Ext.getCmp('username');
		var password = Ext.getCmp('password');
		var okButton = Ext.getCmp('buttonOK');
		
		if(!username.isValid() || !password.isValid()){ 
				// Если не валидно, блокируем кнопку ОК
				okButton.setDisabled(true);
		}
		else{ // Иначе делаем ее активной
				okButton.setDisabled(false) ;   
		}
}

checkFogotPasswordForm = function(){
		var email = Ext.getCmp('email');
		var okfpButton = Ext.getCmp('fpbuttonOK');
		
		if(!email.isValid()){ 
				// Если не валидно, блокируем кнопку ОК
				okfpButton.setDisabled(true) ;    
		}
		else{ // Иначе делаем ее активной
				okfpButton.setDisabled(false) ;   
		}
}

showForgotPasswordForm = function() {
		fogotPasswordWin.show();
		loginWin.hide();
}