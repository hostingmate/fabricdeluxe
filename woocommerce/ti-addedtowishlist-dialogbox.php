<?php
/**
 * The Template for displaying dialog for message added to wishlist product.
 *
 * @version             1.9.15
 * @package           TInvWishlist\Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<div class="tinvwl_added_to_wishlist tinv-modal tinv-modal-open">
	<div class="tinv-overlay"></div>
	<div class="tinv-table">
		<div class="tinv-cell">
			<div class="tinv-modal-inner">
				<i class="<?php echo esc_attr( $icon ); ?>"></i>
				<div class="tinv-txt"><?php echo $msg; // WPCS: xss ok. ?></div>
				<div class="tinvwl-buttons-group tinv-wishlist-clear">
					<button class="button tinvwl_button_view tinvwl-btn-onclick w-100" data-url="<?php echo esc_url( $wishlist_url ); ?>" type="button">View your wishlist</button>
					<?php if ( isset( $dialog_custom_url ) && isset( $dialog_custom_html ) ) : ?>
						<button class="button tinvwl_button_view tinvwl-btn-onclick" data-url="<?php echo esc_url( $dialog_custom_url ); ?>" type="button"><?php echo $dialog_custom_html; // WPCS: xss ok. ?></button>
					<?php endif; ?>
					<button class="button tinvwl_button_close w-100" type="button">Close</button>
				</div>
				<div class="tinv-wishlist-clear"></div>
			</div>
		</div>
	</div>
</div>
