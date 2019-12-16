<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>

	<div class="woocommerce-tabs wc-tabs-wrapper col-12 my-lg-5">
		<div class="d-flex w-100 d-md-none justify-content-center" style="font-size:50%;"><i class="fal fa-angle-left d-inline-block d-md-none mr-2"></i>SCROLLABLE  <i class="fal fa-angle-right d-inline-block d-md-none ml-2"></i></div>
		<ul class="nav nav-pills mb-3 justify-content-lg-center hzl-scroll" id="pills-tab" role="tablist">
			<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
				<li class="<?php echo esc_attr( $key ); ?>_tab nav-item" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
					<a class="nav-link" data-toggle="pill" id="pills-<?php echo esc_attr( $key ); ?>-tab" href="#pills-<?php echo esc_attr( $key ); ?>">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		<div class="tab-content py-3" id="pills-tabContent">
			<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
				<div class="tab-pane woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="pills-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="pills-<?php echo esc_attr( $key ); ?>">
					<?php
					if ( isset( $product_tab['callback'] ) ) {
						call_user_func( $product_tab['callback'], $key, $product_tab );
					}
					?>
				</div>
			<?php endforeach; ?>
		</div>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>

<?php endif; ?>