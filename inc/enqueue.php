<?php

/*

	===========================

	ENQUEUE SCRIPTS

	===========================

*/

/* enqueue scripts */
function fabricdeluxe_script_enqueue() {

    //JS
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'popperJS', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array( 'jquery' ), '1.14.7', true );
    wp_enqueue_script( 'bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
    wp_enqueue_script( 'customJS', get_template_directory_uri() . '/assets/js/fabricdeluxe.js', array( 'jquery' ), '1.0.0', true );

    //CSS
    wp_enqueue_style( 'bootstrapCSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all' );
    wp_enqueue_style( 'flaticons', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'googlefonts1', 'https://fonts.googleapis.com/css?family=Caveat&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesomeCSS', get_template_directory_uri() . '/assets/css/all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/assets/css/fabricdeluxe.min.css', array(), '1.0.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'fabricdeluxe_script_enqueue', 1000 );

/* remove select2 style and scripts */
function fabricdeluxe_dequeue_stylesandscripts_select2() {
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );

        wp_dequeue_script( 'select2');
        wp_deregister_script('select2');

    } 
}
add_action( 'wp_enqueue_scripts', 'fabricdeluxe_dequeue_stylesandscripts_select2', 100 );

/* add icons to admin area */
function fabricdeluxe_invoice_styles_enqueue() {
    wp_register_style( 'invoiceFA', get_template_directory_uri() . '/assets/css/all.min.css', '1.0.0', false );
    wp_enqueue_style( 'invoiceFA' );
}
add_action( 'admin_enqueue_scripts', 'fabricdeluxe_invoice_styles_enqueue' );

/* remove all woocommerce styles */
/*function jk_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );
    unset( $enqueue_styles['woocommerce-layout'] );
    unset( $enqueue_styles['woocommerce-smallscreen'] );
    return $enqueue_styles;
}
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );*/
/*add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );*/