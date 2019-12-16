<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>

<div class="col-12 text-center woocommerce-form-coupon-toggle" style="padding-top: 30px;">
	<button class="button showcoupon" data-toggle="modal" data-target="#couponModal">Do you have a coupon code?</button>
</div>

<div class="modal fade" id="couponModal" tabindex="-1" role="dialog" aria-labelledby="couponModalTitle" aria-hidden="true">

	<div class="modal-dialog modal-dialog-centered" role="document">
	
		<div class="modal-content">

			<div class="modal-header">
			    <h5 class="modal-title" id="couponModalTitle">Coupon Code</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    	<span aria-hidden="true"><i class="fal fa-times"></i></span>
			    </button>
	  		</div>

	      	<div class="modal-body text-center">

			    <form class="checkout_coupon woocommerce-form-coupon" method="post">

					<p><?php esc_html_e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); ?></p>

					<p class="form-row form-row-first">
						<input type="text" name="coupon_code" class="input-text" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" id="coupon_code" value="" />
					</p>

					<p class="form-row form-row-last">
						<button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
					</p>

					<div class="clear"></div>
				</form>

			</div>

		</div>

	</div>

</div>
