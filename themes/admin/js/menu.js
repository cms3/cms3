$j(document).ready(function() {
	$j('#path div.menu div.popupwnd').makePopup();
			
	$j('#path div.menu li.current').click(function() {
		$j('#path div.menu div.popupwnd').click(function(e) {
            var id = $j(this).parent().attr('id');
            id = id.substring(5,(id.length+1));
            $j('#menu-items-of-parent-'+id).togglePopup();
            e.stopPropagation();
        });
	});
	 
	$j('div#menu').click(function(e) {
		$j('#menu-items-of-parent-0').togglePopup();
		e.stopPropagation();
	});
	 
	$j('div#path div.separator').click(function(e) {
		var id = $j(this).attr('id')
		id = id.substring(9,(id.length+1));
		$j('#menu-items-of-parent-'+id).togglePopup();
		e.stopPropagation();
	 });
	 
	$j('div#path div.menu li span.separator').click(function(e) {
		var id = $j(this).parent().attr('id')
		id = id.substring(8,(id.length+1));
		$j('#menu-items-of-parent-'+id).togglePopup();
		e.stopPropagation();
	});

});