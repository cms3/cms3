Ext.onReady(function(){			
	Ext.QuickTips.init();
	
	Ext.get('globalloader').remove();
	
	loginWin.show();
	Ext.get('forgotpassword').on('click', showForgotPasswordForm);
  
});





































