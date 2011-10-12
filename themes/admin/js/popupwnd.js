(function($) {
$.fn.extend({	
	makePopup: function(options){
		options = jQuery.extend({
			closeOnSelfClick: false
		}, options);
		
		var self = $(this);

		this.each(function(){
			var popupWnd = $(this);
			
			if (! options.closeOnSelfClick){
				$(this).click(function(e){
					e.stopPropagation();
				});
			}
			
			$(document).click(function(){
				popupWnd.hidePopup();
			});
			
			$(document).keydown( function(e) { 
				if (e.which == 27){
					popupWnd.hidePopup();
				}
			});
		
			return popupWnd;
		});
		return this;
	},
	
	showPopup: function ()
	{	
		if (this.isMenuPopup())
		{
			this.hideChildrenPopup();
			if(this.isChildrenBreadcrumpsVisible())
			{
				this.data('isVisible',true);
				this.getChildrenBreadcrumpsItems().hide();
			}
			else 
			{
				this.data('isVisible',false);
			}
		}
		
		this.show();
		
	},
	
	hidePopup: function ()
	{
		this.hide();
		if (this.isMenuPopup())
		{
			this.hideChildrenPopup();
			if (this.data('isVisible'))
			{
				this.getChildrenBreadcrumpsItems().show();
			}
		}
	},
	
	togglePopup: function ()
	{
		return (this.is(":visible") ? this.hidePopup() : this.showPopup());
	},
	
	isChildrenBreadcrumpsVisible: function(){
		var id = this.getId();
		return $('#level'+id+' div.breadcrumps').first().is(':visible');
	},
	
	getChildrenBreadcrumpsItems: function() {
		var id = this.getId();
		return $('#level'+id+' div.breadcrumps'+' , '+'#level'+id+' div.separator');
	},
	
	hideChildrenPopup: function()
	{
		var id = this.getId();
		$('#level'+id+' div.popupwnd').hide();
	},
	
	getId: function()
	{
		if (typeof(this.id)=='undefined')
		{
			var parentObjId = $(this).parent().attr('id')
			if (parentObjId)
			{
				this.id = parentObjId.substring(5,(parentObjId.length+1));
			}
			else
			{
				//0 level menu
				this.id = 0;
			}
		}
		return this.id;
	},
	
	isMenuPopup: function() 
	{
		return $(this).parent().hasClass('menu');
	}
});

})(jQuery);