jQuery( document ).ready(function() {
// After here

jQuery('#mobile-menu-open').click(function() {
	jQuery('.site-nav').show();
	jQuery('#mobile-menu-close').show();
});

jQuery('#mobile-menu-close').click(function() {
	jQuery('.site-nav').hide();
	jQuery('#mobile-menu-close').hide();
});

// Voorkomen dat menu link opent op eerst click ALS HET SUBMENU HEEFT
jQuery('.menu-item-has-children').one('click', function() {
	jQuery(this).children('ul').css({'visibility':'visible', 'opacity':'1', 'position':'static'});
	jQuery(this).css({'background':'rgba(0,0,0,0.05)'}).addClass('openedlink');
	return false;
});

// Not working
jQuery('.openedlink').click(function() {
	jQuery(this).children('ul').css({'visibility':'hidden', 'opacity':'0', 'position':'absolute'});
	jQuery(this).removeClass('openedlink');
	return false;
});

/*
jQuery('.menu-item-has-children').click(function() {
	jQuery(this > 'ul').css({'visibility':'', 'opacity':'1', 'position':'static'});
});
*/


// Homepage banner maintain below header
function bannerPosition() {
	var headerHeight = jQuery('.site-header').height();
	jQuery('.container').css('margin-top', headerHeight);
};
bannerPosition();

// Resize function
var resizeTimer;
jQuery(window).on('resize', function(e) {
clearTimeout(resizeTimer);
resizeTimer = setTimeout(function() {
	  
		//Banner below header
		bannerPosition();


  }, 250); // Timing resize function
}); // End resize function

function mediaSize() { 
		/* Set the matchMedia */
		if (window.matchMedia('(max-width: 950px)').matches) {
			
		// Add down arrow to appropriate menu items
		jQuery('.menu-item-has-children > a').append('<i class="fas fa-sort-down"></i>');

		}
};
/* Call the function */
mediaSize();


//END
});