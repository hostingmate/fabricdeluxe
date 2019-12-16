<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<style>
#fd_myaccount_dashboard a:hover {
	color: black;
	background: #fad8d7;
}
</style>

<h2 class="text-left" style="text-transform: normal;">
	<?php printf( __( 'Hello %1$s', 'woocommerce' ), '<strong>' . esc_html( $current_user->display_name ) . '</strong>' ); ?>
</h2>

<div class="card-deck text-center" id="fd_myaccount_dashboard">
	<a class="card p-4 shadow rounded m-3 border-0" <?php echo 'href="' . wc_get_endpoint_url( 'payment-methods' ) . '"' ?> >
		<i class="fal fa-credit-card fa-3x mb-2"></i>
		<h5 class="mb-2">Save payment methods</h5>
		<p class="mb-2">For faster checkout on your next order!</p>
	</a>
	<a class="card p-4 shadow rounded m-3 border-0" <?php echo 'href="' . get_site_url() . '/wishlist"'; ?> >
		<i class="fal fa-heart fa-3x mb-2"></i>
		<h5 class="mb-2">Keep favourites</h5>
		<p class="mb-2">Save your wishlists to your account!</p>
	</a>
	<a class="card p-4 shadow rounded m-3 border-0" <?php echo 'href="' . wc_get_endpoint_url( 'orders' ) . '"' ?> >
		<i class="fal fa-inventory fa-3x mb-2"></i>
		<h5 class="mb-2">Track your orders</h5>
		<p class="mb-2">To know what stage your order is at!</p>
	</a>
</div>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
