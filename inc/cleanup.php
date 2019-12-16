<?php

/*

	===========================

	CLEANUP SCRIPTS

	===========================

*/

/* remove version string from js and css */
function fabricdeluxe_remove_wp_version_strings( $src ) {
    
    global $wp_version;
    parse_str( parse_url($src, PHP_URL_QUERY), $query );
    if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
    
}
add_filter( 'script_loader_src', 'fabricdeluxe_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'fabricdeluxe_remove_wp_version_strings' );

/* remove metatag generator from header */
function fabricdeluxe_remove_meta_version() {
    return '';
}
add_filter( 'the_generator', 'fabricdeluxe_remove_meta_version' );

/* remove admin bar for all users */
show_admin_bar( false );

/* redirect to home on logout */
function unlog(){
  wp_redirect( site_url() );
  exit();
}
add_action('wp_logout','unlog');

/* if accessing wp-login.php directly */
function fabricdeluxe_custom_login(){
 global $pagenow;
 if( 'wp-login.php' == $pagenow && $_GET['action']!="logout") {
  wp_redirect( site_url() );
  exit();
 }
}
add_action('init','fabricdeluxe_custom_login');

/* if accessing wp-admin.php directly */
function fabricdeluxe_custom_admin(){
 global $pagenow;
 if( 'wp-admin.php' == $pagenow && !is_user_logged_in() ) {
  wp_redirect( site_url() );
  exit();
 }
}
add_action('init','fabricdeluxe_custom_admin');

/* redirect to home if cart is empty */
function wc_empty_cart_redirect_url() {
        return get_permalink( woocommerce_get_page_id( 'shop' ) );
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );

/* remove title */
function fabricdeluxe_woocommerce_title_remove() { return false; }
add_filter( 'woocommerce_show_page_title' , 'fabricdeluxe_woocommerce_title_remove' );

/* change empty cart notice */
function fabricdeluxe_add_content_empty_cart() {
    echo '<h2 class="w-100 text-center m-5">Oh no! It looks like your cart is currently empty <i class="far fa-frown-open"></i></h2>';
}
remove_action( 'woocommerce_cart_is_empty', 'wc_empty_cart_message', 10 );
add_action( 'woocommerce_cart_is_empty', 'fabricdeluxe_add_content_empty_cart', 10 );

/* remove actions */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );