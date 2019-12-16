<?php

/*

	===========================

	THEME SUPPORT SCRIPTS

	===========================

*/

/* add menus, navbars, etc */
function fabricdeluxe_theme_setup() {

    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form' ) );

    register_nav_menu( 'header_top', 'Header (Top) Navigation' );
    register_nav_menu( 'header_bottom', 'Header (Bottom) Navigation' );
    register_nav_menu( 'footer_bottom', 'Footer (Bottom) Navigation' );
    register_nav_menu( 'mobile', 'Mobile Navigation' );

}
add_action( 'init', 'fabricdeluxe_theme_setup' );

/* add support for woocommerce */
function fabricdeluxe_theme_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
}
add_action( 'after_setup_theme', 'fabricdeluxe_theme_support', 999 );