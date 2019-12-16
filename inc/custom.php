<?php

/*

	===========================

	CUSTOM FUNCTIONS

	===========================

*/

/* free shipping notice */
function fabricdeluxe_custom_wc_free_shipping_notice() {
	if ( ! is_cart() ) {
		return;
	}
	$packages = WC()->cart->get_shipping_packages();
	$package = reset( $packages );
	$zone = wc_get_shipping_zone( $package );
	$cart_total = WC()->cart->get_displayed_subtotal();
	if ( WC()->cart->display_prices_including_tax() ) {
		$cart_total = round( $cart_total - ( WC()->cart->get_discount_total() + WC()->cart->get_discount_tax() ), wc_get_price_decimals() );
	} else {
		$cart_total = round( $cart_total - WC()->cart->get_discount_total(), wc_get_price_decimals() );
	}
	foreach ( $zone->get_shipping_methods( true ) as $k => $method ) {
		$min_amount = $method->get_option( 'min_amount' );
		if ( $method->id == 'free_shipping' && ! empty( $min_amount ) && $cart_total < $min_amount ) {
			$remaining = $min_amount - $cart_total;
			
			$added_text = sprintf( '<div class="text-center text-md-left w-100 w-lg-auto float-left"><i class="fal fa-gift-card fa-2x mr-3"></i>Spend %s more to get free shipping!</div>', wc_price( $remaining ) );
			$return_to = apply_filters( 'woocommerce_continue_shopping_redirect', wc_get_raw_referer() ? wp_validate_redirect( wc_get_raw_referer(), false ) : wc_get_page_permalink( 'shop' ) );
			$notice = sprintf( '%s <a href="%s" class="button wc-forward w-100 w-md-auto mt-3 mt-md-0">%s</a>', $added_text, esc_url( $return_to ), esc_html__( 'Continue Shopping', 'woocommerce' ) );
			
			wc_add_notice( $notice, 'notice' );
		}
	}

	return true;
}
add_action( 'wp', 'fabricdeluxe_custom_wc_free_shipping_notice' );

/* dont allow PO boxes at checkout */
function fabricdeluxe_disallow_pobox_shipping( $posted ) {
	global $woocommerce;
	
	$address  = ( isset( $posted['shipping_address_1'] ) ) ? $posted['shipping_address_1'] : $posted['billing_address_1'];
	$address2  = ( isset( $posted['shipping_address_2'] ) ) ? $posted['shipping_address_2'] : $posted['billing_address_2'];

	$replace  = array(" ", ".", ",");
	$address  = strtolower( str_replace( $replace, '', $address ) );
	$address2 = strtolower( str_replace( $replace, '', $address2 ) );

	if ( strstr( $address, 'pobox' ) || strstr( $address2, 'pobox' ) || strstr( $address, 'collect' ) || strstr( $address2, 'collect' ) || strstr( $address, 'post office' ) || strstr( $address2, 'post office' ) ) {
	     wc_add_notice( 'Sorry, we do not ship to PO BOX addresses, Post Offices or Parcel Collect boxes.', 'error' );
	}
}
add_action( 'woocommerce_after_checkout_validation', 'fabricdeluxe_disallow_pobox_shipping' );

/* show free shipping only */
function show_hide_shipping_methods( $rates ) {
    $free_rate_id    = '';
    $other_rates_ids = [];

    foreach ( $rates as $rate_id => $rate ) {
        if ( 'free_shipping' === $rate->method_id ) {
            $free_rate_id = $rate_id; // grab "Free shipping" rate ID
        }
        if ( ! in_array( $rate->method_id, ['free_shipping', 'local_pickup'] ) ) {
            $other_rates_ids[] = $rate_id; 
        }
    }
    if ( ! empty($free_rate_id) && isset($rates[$free_rate_id]) && sizeof($other_rates_ids) > 0 ) {
        foreach ( $other_rates_ids as $rate_id ) {
            unset($rates[$rate_id]);
        }
    }
    return $rates;
}
add_filter( 'woocommerce_package_rates', 'show_hide_shipping_methods', 100 );

/* display thumbnail in order list */
function display_product_image_in_order_item( $item_name, $item, $is_visible ) {
    if( is_wc_endpoint_url( 'view-order' ) ) {
        $product   = $item->get_product();
        $thumbnail = $product->get_image(array(100, 100));
        if( $product->get_image_id() > 0 )
            $item_name = '<div class="item-thumbnail">' . $thumbnail . '</div>' . $item_name;
    }
    return $item_name;
}
add_filter( 'woocommerce_order_item_name', 'display_product_image_in_order_item', 20, 3 );

/* thumbnail template loop */
function woocommerce_template_loop_product_thumbnail() {
    echo '<div class="fd_image_thumbnail">' . woocommerce_get_product_thumbnail() . '</div>';
}

/* add sku and width to shop loop */
function fabricdeluxe_show_product_dimensions_loop() {
    global $product;

    if( ! empty( $product->get_sku() ) && empty( $product->get_width() ) ) {
        echo '<div class="fd_attributes_shop_loop row"><span class="col-12 text-center">#' . $product->get_sku() . '</span></div>';
    } else if( ! empty( $product->get_width() ) && ! empty( $product->get_sku() ) ) {
        echo '<div class="fd_attributes_shop_loop row"><span class="col-12 col-lg-6 text-center text-lg-left">' . $product->get_width() . 'cm</span><span class="col-12 col-lg-6 text-center text-lg-right">#' . $product->get_sku() . '</span></div>';
    }
}
add_action( 'woocommerce_after_shop_loop_item_title', 'fabricdeluxe_show_product_dimensions_loop' );

/* add wishlist heart to shop loop */
function fabricdeluxe_before_shop_loop_item() {
    echo do_shortcode("[ti_wishlists_addtowishlist loop=yes]");
}
add_action( 'woocommerce_after_shop_loop_item_title', 'fabricdeluxe_before_shop_loop_item' );

/* change product loop link */
function fabricdeluxe_before_shop_loop_item_link() {
    echo '<a href="' . get_permalink($product_id) . '" title="' . get_the_title($product_id) . '">';
}
add_action( 'woocommerce_before_shop_loop_item', 'fabricdeluxe_before_shop_loop_item_link', 10 );
function fabricdeluxe_after_shop_loop_item_link() {
    echo '</a>';
}
add_action( 'woocommerce_after_shop_loop_item', 'fabricdeluxe_after_shop_loop_item_link', 5 );

/* add recommended products tab to single product page */
function recommended_products_tab( $tabs ) {
	if(empty($tabs)){
        return;
    }
    $tabs['recommended_products_tab'] = array(
        'title'     => __( 'We Also Recommend...', 'woocommerce' ),
        'priority'  => 120,
        'callback'  => 'recommended_products_tab_content'
    );
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'recommended_products_tab' );

/* show recommended products tab content */
function recommended_products_tab_content() {
    if( !empty( woocommerce_upsell_display() ) ) {
        woocommerce_upsell_display();
    } else {
        /*echo '<a class="button" href="https://www.fabricdeluxe.com.au/">Return to shop</a>';*/
        return;
    }
}

/* change breadcrumb navigation style */
function fabricdeluxe_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' - ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb d-flex align-items-center h-100 w-100 justify-content-end" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( '', 'breadcrumb', 'woocommerce' ),
        );
}
add_filter( 'woocommerce_breadcrumb_defaults', 'fabricdeluxe_woocommerce_breadcrumbs' );

/* add total price to single product page */
function woocommerce_total_product_price() {
    global $woocommerce, $product;
    global $post;
    $terms = wp_get_post_terms( $post->ID, 'product_cat' );
    foreach ( $terms as $term ) $categories[] = $term->slug;
    if( !in_array( 'gifts', $categories ) ) {
        echo sprintf('<div id="product_total_price" class="my-3 text-center text-lg-left w-100">%s %s</div>',__('Sub-total:','woocommerce'),'<span class="price">$'.$product->get_price().'</span>');
        ?>
            <script>
                jQuery(function($){
                    var price = <?php echo $product->get_price(); ?>,
                        currency = '<?php echo get_woocommerce_currency_symbol(); ?>';

                    $('[name=quantity]').change(function(){
                        if (!(this.value < 0)) {

                            var product_total = parseFloat(price * this.value);

                            $('#product_total_price .price').html( currency + product_total.toFixed(2));

                        }
                    });
                });
            </script>
        <?php
    }
}
add_action( 'woocommerce_before_add_to_cart_button', 'woocommerce_total_product_price', 31 );

/* add yards to meters to single product page */
function woocommerce_yards_to_meters() {
    global $woocommerce, $product;
    global $post;
    $terms = wp_get_post_terms( $post->ID, 'product_cat' );
    foreach ( $terms as $term ) $categories[] = $term->slug;

    if( in_array( 'vlisco', $categories ) ) {
        echo sprintf('<div id="product_total_price" class="my-3 text-center text-lg-left w-100">%s %s</div>',__('Meterage Conversion:','woocommerce'),'<span class="conversion_html h5">1.83 meters</span>');
        ?>
            <script>
                jQuery(function($){
                    var conversion = 0.9144;

                    $('[name=quantity]').change(function(){
                        if (!(this.value < 0)) {

                            var conversion_total = parseFloat(conversion * this.value);

                            $('#product_total_price .conversion_html').html( conversion_total.toFixed(2) + ' meters' );

                        }
                    });
                });
            </script>
        <?php
    } else {
    	return;
    }
}
add_action( 'woocommerce_after_add_to_cart_form', 'woocommerce_yards_to_meters', 5 );

/* add to wishlist before summary on single product page */
function fabricdeluxe_wishlist_single_product_page() {
    echo do_shortcode( '[ti_wishlists_addtowishlist]' );
}
add_action( 'woocommerce_after_add_to_cart_form', 'fabricdeluxe_wishlist_single_product_page' );

/* only print after certain payment methods */
function xc_woo_cloud_print_orders_on_payment_complete_alt_alt($return, $order_id){
    $order = new WC_Order($order_id);
    $payment_method = $order->get_payment_method();
    if(in_array($payment_method, array("stripe", "paypal", "moto"))){
        return true;
    }
    return false;
}
add_filter('xc_woo_cloud_print_orders_on_payment_complete', "xc_woo_cloud_print_orders_on_payment_complete_alt", 10, 2);