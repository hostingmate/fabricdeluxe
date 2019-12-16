<?php

/*

	===========================

	WIDGETS SCRIPTS

	===========================

*/

function fabricdeluxe_widget_setup() {

    register_sidebar(
        array(
            'name'          => 'WooCommerce',
            'id'            => 'shop',
            'description'   => 'Shop Sidebar',
            'class'         => 'custom',
            'before_widget' => '<aside id="%1" class="widget %2">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'WooCommerce (Mobile)',
            'id'            => 'shop-1',
            'description'   => 'Shop Mobile Sidebar',
            'class'         => 'custom',
            'before_widget' => '<aside id="%1" class="widget %2">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Sidebar',
            'id'            => 'content_sidebar',
            'description'   => 'Sidebar',
            'class'         => 'custom',
            'before_widget' => '<aside id="%1" class="widget %2">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        )
    );
    
}
add_action( 'widgets_init', 'fabricdeluxe_widget_setup' );