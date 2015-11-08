jQuery(document).ready(function(){
								
	///// TRANSFORM CHECKBOX /////							
	jQuery('input:checkbox').uniform();
	
	///// LOGIN FORM SUBMIT /////
	jQuery('#login').submit(function(){
	
		if(jQuery('#userid').val() == '' && jQuery('#password').val() == '') {
			jQuery('.nousername').fadeIn();
			jQuery('.nopassword').hide();
			return false;	
		}
		if(jQuery('#userid').val() != '' && jQuery('#password').val() == '') {
			jQuery('.nopassword').fadeIn().find('.userlogged h4, .userlogged a span').text(jQuery('#userid').val());
			jQuery('.nousername,.username').hide();
			return false;;
		}
	});
	
	///// ADD PLACEHOLDER /////
	jQuery('#userid').attr('placeholder','Username');
	jQuery('#password').attr('placeholder','Password');
});
