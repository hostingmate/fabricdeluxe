<?php

/**

 * The Template for displaying empty wishlist.

 *

 * @version             1.0.0

 * @package           TInvWishlist\Template

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}



?>

<div class="tinv-wishlist woocommerce">

	<?php do_action( 'tinvwl_before_wishlist', $wishlist ); ?>

	<?php if ( function_exists( 'wc_print_notices' ) ) { wc_print_notices(); } ?>

	<p class="cart-empty">

		<?php if ( get_current_user_id() === $wishlist['author'] ) { ?>

			<?php echo '<h2 class="w-100 text-center mb-5">Oh no! Your wishlist is currently empty!</h2>'; ?>

		<?php } else { ?>

			<?php echo '<h2 class="w-100 text-center mb-5">Oh no! Your wishlist is currently empty!</h2>'; ?>

		<?php } ?>

	</p>



	<?php do_action( 'tinvwl_wishlist_is_empty' ); ?>



	<p class="return-to-shop">

		<a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"><?php esc_html_e( 'Return To Shop', 'ti-woocommerce-wishlist' ); ?></a>

	</p>

</div>

