//javascript functions

jQuery( document ).ready(function() {

	jQuery('ul.woocommerce-thankyou-order-details li').addClass('w-100 w-lg-auto d-block d-lg-table-cell');
	jQuery('#pills-recommended_products_tab .products').addClass('columns-4');
	jQuery('#pills-tabContent div.tab-pane:first-of-type').addClass('active');
	jQuery('#pills-tabContent div.tab-pane:first-of-type').addClass('show');
	jQuery('#pills-tab li.nav-item:first-of-type a').addClass('active');
	jQuery('.woocommerce-notices-wrapper').addClass('col-12');
	jQuery('#content_main .woocommerce').addClass('row');



	jQuery('#pills-recommended_products_tab .products').removeClass('columns-3');



	jQuery('form.checkout_coupon').css('display', 'block');
	jQuery('#search_form').css('display', 'none');
	jQuery('#search_bar_btn').click(function() {
		jQuery('#search_form').slideToggle();
	});



	jQuery(".woo-social-login-profile h2").text("LINKED SOCIAL ACCOUNTS");



	jQuery(function() {
		jQuery("#back_to_top").on('click', function() {
			jQuery("body").animate({ scrollTop: 0 }, 1000);
		});
	});



	jQuery( "li.menu-item-has-children" ).hover(function() {
	    jQuery( this ).find( " > .sub-menu" ).css('opacity', '1');
	}, function(){
	    jQuery( this ).find( ".sub-menu" ).css('opacity', '0');
	});



	jQuery(function () {
		jQuery('[data-toggle="popover"]').popover();
	});



	jQuery(document).scroll(function() {
		var y = jQuery(this).scrollTop();
		
		if (y > 150) {
			jQuery('#back_to_top').fadeIn();
		} else {
			jQuery('#back_to_top').fadeOut();
		}
	});

});