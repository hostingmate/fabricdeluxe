<?php

/**

 * Customer order ready email

 *

 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.

 *

 * HOWEVER, on occasion WooCommerce will need to update template files and you

 * (the theme developer) will need to copy the new files to your theme to

 * maintain compatibility. We try to do this as little as possible, but it does

 * happen. When this occurs the version of the template file will be bumped and

 * the readme will list any important changes.

 *

 * @see https://docs.woocommerce.com/document/template-structure/

 * @package WooCommerce/Templates/Emails

 * @version 3.5.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



/*

 * @hooked WC_Emails::email_header() Output the email header

 */

do_action( 'woocommerce_email_header', $email_heading, $email ); ?>



<?php /* translators: %s: Customer first name */ ?>

<h2><?php printf( esc_html__( 'Hi %s!', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></h2>

<?php /* translators: %s: Site title */ ?>

<div style="padding:30px 0;">

	<p><?php esc_html_e( 'Your order is ready and waiting in-store!', 'woocommerce' ); ?></p>

	<p>Pickup times are the same as our opening hours:</p>

	<table style="display:inline-table; text-align:left; font-family:Josefin Sans;">
		<tr>
			<td>TUE, WED, SAT</td>
			<td>10am - 5pm</td>
		</tr>
		<tr>
			<td>THU, FRI</td>
			<td>10am - 6pm</td>
		</tr>
		<tr>
			<td>SUN, MON</td>
			<td>closed</td>
		</tr>
	</table>

	<p>We'd love to hear from you! Tag us on Instagram or Facebook to let us (and the world) know about your happy purchase!</p>

	<a href="">Instagram</a><a href="">Facebook</a>

</div>

<div style="padding:30px 0;">

	<p><?php printf( __( "In the meantime, here's a reminder of what you ordered:" ) ); ?></p>
	
	<?php
	/**
	 * @hooked WC_Emails::order_details() Shows the order details table.
	 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
	 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
	 * @since 2.5.0
	 */
	do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );
	?>

</div>

<div style="padding:30px 0;">

	<?php
	/**
	 * @hooked WC_Emails::order_meta() Shows order meta data.
	 */
	do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );
	?>

</div>

<div style="padding:30px 0;">

	<?php
	/**
	 * @hooked WC_Emails::customer_details() Shows customer details
	 * @hooked WC_Emails::email_address() Shows email address
	 */
	do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );
	?>

</div>

<div style="padding:30px 0;">

	<?php
	/**
	 * @hooked WC_Emails::email_footer() Output the email footer
	 */
	do_action( 'woocommerce_email_footer', $email );
	?>

</div>

<p>If you have any questions or concerns, just drop us an email on info@fabricdeluxe.com.</p>

<p>Happy Sewing!<br>Fabric Deluxe</p>
