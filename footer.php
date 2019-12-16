			<section id="footer" class="container-fluid no-gutters">

				<?php get_template_part( 'inc/footer', 'default' ); ?>

			</section>

			<section id="modals" class="container-fluid no-gutters">

				<div class="modal fade" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="newsletterModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
						    <div class="modal-body row align-items-center no-gutters">
						    	<div class="col-12 col-lg-6">
						    		<div class="img_here"></div>
						    	</div>
						    	<div class="col-12 col-lg-6 p-3">
						    		<h5>Subscribe to our mailing list for frequent updates!</h5>
						    		<?php echo do_shortcode( '[mc4wp_form id="393"]' ); ?>
						    		<br>
						    		<input type="checkbox" class="d-inline mr-3"><label class="d-inline">Don't show this again</label>
						    		<br>
						    		<button type="button" class="close" data-dismiss="modal" aria-label="Close">Close</button>
						    	</div>
						    </div>
					    </div>
					</div>
				</div>

				<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
					    	<div class="modal-header">
					    		<h5 class="modal-title">Shopping Cart</h5>
					    		<button type="button" class="close fal fa-times" data-dismiss="modal" aria-label="Close"></button>
					    	</div>
						    <div class="modal-body p-5">
						    	<?php woocommerce_mini_cart(); ?>
						    </div>
					    </div>
					</div>
				</div>

				<?php
					if( is_page( 'checkout' ) ) { fd_modal_coupon(); }
					if( ! is_user_logged_in() ) { fd_modal_login(); }
				?>

			</section>

			<?php wp_footer(); ?>
	
	</body>

</html>