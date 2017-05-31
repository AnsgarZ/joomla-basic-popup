/**
 * show the popup and hide it on mouse click resp. timeout
 */
jQuery(document).ready(function() {

	//open popup
	jQuery("#mod_basic_popup_wrapper").fadeIn(1000);
	 
	//close popup by click
	jQuery("#mod_basic_popup_wrapper").click(
		function(){
			jQuery("#mod_basic_popup_wrapper").fadeOut(1000);
		}
	);
	
	//close popup automatically after timeout
	setTimeout(function() { jQuery("#mod_basic_popup_wrapper").fadeOut(1000); }, 8000);
});
