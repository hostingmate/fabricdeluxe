				
				<div class="row py-5" id="content_bottom">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center col-lg-6 text-lg-left pb-3 pb-lg-0">
								<a class="px-2" href="https://www.facebook.com/fabricdeluxeofficial">
									<i class="fab fa-facebook h2 px-1"></i>
								</a>
								<a class="px-2" href="https://www.instagram.com/fabricdeluxe">
									<i class="fab fa-instagram h2 px-1"></i>
								</a>
							</div>
							<div class="col-12 text-center col-lg-6 text-lg-right pt-3 pt-lg-0" id="content_bottom_newsletter">
								<?php echo do_shortcode( '[mc4wp_form id="339"]' ); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="row py-5" id="footer_top">
						
					<div class="container">

						<div class="row">

							<div class="col-12 text-center">
								<?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
							</div>
							<div class="col-12 text-center">
								<i class="fab fa-cc-paypal h3 px-2 py-4"></i>
								<i class="fab fa-cc-stripe h3 px-2 py-4"></i>
								<i class="fab fa-cc-visa h3 px-2 py-4"></i>
								<i class="fab fa-cc-mastercard h3 px-2 py-4"></i>
								<i class="fab fa-cc-amex h3 px-2 py-4"></i>
							</div>
							<div class="col-12 text-center">
								<h6 style="font-weight:lighter;"><i class="fal fa-lock h6 mr-2"></i>Secured by Comodo</h6>
							</div>

						</div>

					</div>

				</div>

				<div class="row py-3" id="footer_bottom">

					<div class="container">

						<div class="row">

							<div class="col-12 col-lg-6 text-center text-lg-left order-2 order-lg-1 py-3 align-self-center"><span>Fabric Deluxe &copy; Copyright 2019. All rights reserved. <div class="d-block d-md-inline py-3 p-md-0">Created by <a href="https://www.hosting-mate.com.au/" style="text-decoration:underline !important">Hosting Mate</a></div></span></div>

							<div class="col-12 col-lg-6 text-center text-lg-right order-1 order-lg-2 py-3">
								<?php wp_nav_menu( array( 'theme_location'=>'footer_bottom','container'=>'div','container_class'=>'menu-footer navbar justify-content-lg-end justify-content-center pr-lg-0','menu_class'=>'menu nav', 'items_wrap'=>'<ul id = "%1$s" class = "%2$s">%3$s</ul>') ) ?>
							</div>

						</div>

					</div>

				</div>