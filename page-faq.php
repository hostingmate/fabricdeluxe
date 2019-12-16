			<?php get_header(); ?>

			<style>
				#accordionFaqOne .card,
				#accordionFaqTwo .card {
					border: solid 1px #fad8d7;
					border-top-width: 0;
					border-radius: 0;
				}
				#accordionFaqOne .card:first-of-type,
				#accordionFaqTwo .card:first-of-type {
					border-top-width: 1px;
				}
				#accordionFaqOne .card-header,
				#accordionFaqTwo .card-header {
					background: white;
					border: 0;
				}
				#accordionFaqOne .collapse,
				#accordionFaqTwo .collapse,
				#accordionFaqOne .collapsing,
				#accordionFaqTwo .collapsing {
					background: #fad8d7;
					border-top: solid 1px rgba(0,0,0,.125);
					color: black;
				}
				.fd-faq-btn {
					font-size: 1rem;
					text-align: center;
					width: 100%;
					background: transparent;
					height: unset !important;
					max-height: unset !important;
					border: none !important;
				}
				.fd-faq-btn:hover {
					background: transparent;
					color: black;
					text-decoration: underline;
				}

			</style>

			<section id="content" class="container-fluid no-gutters my-5">
				<div class="row" id="content_main">
					<div class="container">
						<div class="row my-5">
							<div class="col-12 my-5 text-center">
								<h1>Frequently Asked Questions</h1>
							</div>
						</div>
						<div class="row my-5">
							
							<div class="col-12 col-md-6 mb-5">

								<div id="accordionFaqOne">

									<h3 class="text-center"><i class="fal fa-globe-asia mr-4"></i>Online</h3>

									<div class="card">
									    <div class="card-header" id="headingOne">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Do You Have A Minimum Cut And What Intervals Do You Cut At?</button>
											</h5>
									    </div>

									    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFaqOne">
											<div class="card-body">
												<p class="mb-0">10cm is our minimum and we cut fabric at 10cm intervals there after.<br>When selecting how much fabric to order on the product page, use this guide:</p>
												<ul>
													<li>1.0 = 1 meter of fabric</li>
													<li>0.1 = 10cm of fabric</li>
													<li>1.5 = 1 meter and 50cm of fabric</li>
												</ul>
											</div>
									    </div>
									</div>

									<div class="card">
									    <div class="card-header" id="headingTwo">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">How Do I Find Out About Shipping & Delivery?</button>
											</h5>
									    </div>

									    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFaqOne">
											<div class="card-body">
												<p class="mb-0">Please click <a href="https://www.fabricdeluxe.com.au/shipping" target="_blank">HERE</a> to see our Shipping & Delivery terms page.</p>
											</div>
									    </div>
									</div>

									<div class="card">
									    <div class="card-header" id="headingThree">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Do I Need An Account To Shop Online?</button>
											</h5>
									    </div>

									    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFaqOne">
											<div class="card-body">
												<p class="mb-0">Yes, you are required to have an account to shop online, however we have implemented social login to make it quicker and easier to sign up!</p>
											</div>
									    </div>
									</div>

									<div class="card">
									    <div class="card-header" id="headingFour">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">What Payment Methods Do You Accept?</button>
											</h5>
									    </div>

									    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFaqOne">
											<div class="card-body">
												<p class="mb-0">We accept PayPal, Visa, Mastercard & American Express. (All card payments are facilitated and secured by Stripe.)</p>
											</div>
									    </div>
									</div>

									<div class="card">
									    <div class="card-header" id="headingFive">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">What Are Your Customer Service Hours?</button>
											</h5>
									    </div>

									    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFaqOne">
											<div class="card-body">
												<p class="mb-0">You can call us between 10am and 5pm Tuesday, Wednesday and Saturday, or 10am to 6pm Thursday and Friday.<br>Outside these hours you can contact us via email and we will endeavour to get back to you as soon as possible.</p>
											</div>
									    </div>
									</div>

									<!-- <div class="card">
									    <div class="card-header" id="headingSix">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">What Does 'Reorderable' Mean On The Product Page?</button>
											</h5>
									    </div>

									    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionFaqOne">
											<div class="card-body">
												<p class="mb-0">This means that this product is able to be reordered and that we regularly stock this product. If this product is “OUT OF STOCK” you will be able to sign up to receive an email for when it is back in stock.</p>
											</div>
									    </div>
									</div> -->

									<div class="card">
									    <div class="card-header" id="headingSeven">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">How Can I Be Sure That A Fabric Will Be The Same As I See It On The Online Store?</button>
											</h5>
									    </div>

									    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionFaqOne">
											<div class="card-body">
												<p class="mb-0">Every effort has been made to represent the fabric online as it is in person, however we are unable to account for screen colour settings, which may alter the way you see the colour/texture of a fabric.<br><br>To be completely sure of a fabric, we encourage you to buy a sample (10cm cut) so that you can make sure that the fabric is perfect for your purpose.</p>
											</div>
									    </div>
									</div>

								</div>

							</div>

							<div class="col-12 col-md-6 mb-5">

								<div id="accordionFaqTwo">

									<h3 class="text-center"><i class="fal fa-store-alt mr-4"></i>Instore</h3>

									<div class="card">
									    <div class="card-header" id="headingEight">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">How Do I Contact / Find You?</button>
											</h5>
									    </div>

									    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionFaqTwo">
											<div class="card-body">
												<p class="mb-0">Head over to our <a href="https://www.fabricdeluxe.com.au/contact-us" target="_blank" style="text-decoration:underline;">Contact Us</a> page for more information about visiting or contacting us!</p>
											</div>
									    </div>
									</div>

									<div class="card">
									    <div class="card-header" id="headingNine">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">What Are Your Trading Hours?</button>
											</h5>
									    </div>

									    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionFaqTwo">
											<div class="card-body">
												<table>
													<tbody>
														<tr>
															<td><strong>Tue, Wed, Sat:</strong></td>
															<td>10am - 5pm</td>
														</tr>
														<tr>
															<td><strong>Thur, Fri:</strong></td>
															<td>10am - 6pm</td>
														</tr>
														<tr>
															<td><strong>Sun, Mon:</strong></td>
															<td>CLOSED</td>
														</tr>
													</tbody>
												</table>
											</div>
									    </div>
									</div>

									<div class="card">
									    <div class="card-header" id="headingTen">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">I'm New To Sewing, Can You Help?</button>
											</h5>
									    </div>

									    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionFaqTwo">
											<div class="card-body">
												<p class="mb-0">Of course! We are more than happy to show you how to read a pattern, pick the right fabric or how to do that one tricky thing that you’re stuck on.<br><br>We are also able to connect you with sewing teachers, clubs, forums, events and dressmakers to help you further.</p>
											</div>
									    </div>
									</div>

									<div class="card">
									    <div class="card-header" id="headingEleven">
											<h5 class="mb-0">
												<button class="fd-faq-btn" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">Will You Be Open On Public Holidays?</button>
											</h5>
									    </div>

									    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionFaqTwo">
											<div class="card-body">
												<p class="mb-0">The best way to know if we will be open on a certain day is to follow us on <a href="https://www.instagram.com/fabricdeluxe/" target="_blank" style="text-decoration:underline;">Instagram</a> and/or <a href="https://www.facebook.com/fabricdeluxeofficial/" target="_blank" style="text-decoration:underline;">Facebook</a>, where we keep our followers up-to-date ib current events. Otherwise, feel free to <a href="https://www.fabricdeluxe.com.au/contact" target="_self" style="text-decoration:underline;">contact us</a>!</p>
											</div>
									    </div>
									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</section>

			<?php get_footer(); ?>