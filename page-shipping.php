			<?php get_header(); ?>

			<section id="content" class="container-fluid no-gutters my-5">
				<div class="row" id="content_main">
					<div class="container">
						<div class="row my-5">
							<div class="col-12 my-5 text-center">
								<h1>Shipping and Delivery</h1>
							</div>
							<div class="col-6 col-md-3 my-5 text-center">
								<i class="fal fa-truck mb-3" style="font-size:3rem;"></i>
								<h4>Standard Shipping</h4>
								<h6>$10 Flat Rate</h6>
							</div>
							<div class="col-6 col-md-3 my-5 text-center">
								<i class="fal fa-gift-card mb-3" style="font-size:3rem;"></i>
								<h4>Free Shipping</h4>
								<h6>For orders of $160 or more!</h6>
							</div>
							<div class="col-6 col-md-3 my-5 text-center">
								<i class="fal fa-shipping-fast mb-3" style="font-size:3rem;"></i>
								<h4>Express & International Shipping</h4>
								<h6>See below</h6>
							</div>
							<div class="col-6 col-md-3 my-5 text-center">
								<i class="fal fa-store-alt mb-3" style="font-size:3rem;"></i>
								<h4>Local Pickup</h4>
								<h6>Free</h6>
							</div>
							<div class="col-12 my-3">
								<?php
									if( have_posts() ):
										while( have_posts() ): the_post();
											the_content();
										endwhile;
									endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php get_footer(); ?>