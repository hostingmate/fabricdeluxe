<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 *
 * Updated by Hosting Mate [15/12/2019]
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="container-fluid py-4" id="fd_before_checkout">
	<div class="row">
		<?php if( !is_user_logged_in() ) { echo '
		<div class="col-12 col-lg-6 my-3">
			<button class="woocommerce-form-login-toggle text-center p-3 rounded w-100" data-toggle="modal" data-target="#loginModal">
				<i class="fal fa-address-card fa-2x mb-3"></i>
				<h6>Are you a returning customer?</h6>
			</button>
		</div>
		'; } ?>
		<div <?php if( !is_user_logged_in() ) { echo ' class="col-12 col-lg-6 my-3" '; } else { echo ' class="col-12 my-3 rounded" '; } ?> >
			<button class="woocommerce-form-login-toggle text-center p-3 rounded showcoupon w-100" data-toggle="modal" data-target="#couponModal">
				<i class="fal fa-gift-card fa-2x mb-3"></i>
				<h6>Do you have a voucher?</h6>
			</button>
		</div>
	</div>
</div>

<form name="checkout" method="post" class="checkout woocommerce-checkout col-12" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data"><div class="row">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set col-12" id="customer_details">
			<div class="row">
				<div class="col-lg-6 col-12"><?php do_action( 'woocommerce_checkout_billing' ); ?></div>
				<div class="col-lg-6 col-12"><?php do_action( 'woocommerce_checkout_shipping' ); ?></div>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<div class="col-12">

		<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
		
		<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

		<div id="order_review" class="woocommerce-checkout-review-order">
			<?php do_action( 'woocommerce_checkout_order_review' ); ?>
		</div>

		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

	</div>

</div></form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
