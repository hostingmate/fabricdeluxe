			<?php get_header(); ?>

			<section id="content" class="container-fluid no-gutters mb-5">
				<div class="row" id="content_header" style="height:300px;">
					<div class="col-12" style="overflow:hidden; width:100%; height:auto;"></div>
				</div>
				<div class="row" id="content_main">
					<div class="container mt-5">
						<div class="row my-3">
							<div class="col-12 my-3 text-center">
								<h1>About Us</h1>
							</div>
						</div>
						<div class="row my-3">
							<div class="col-12 col-md-8 mx-md-auto my-3" style="font-weight:100!important; line-height:2rem;">
                            <?php
									if( have_posts() ):
										while( have_posts() ): the_post();
											the_content();
										endwhile;
									endif;
								?>
							</div>
							<div class="col-12 col-md-8 mx-md-auto mb-3 text-center text-md-right">
								<img style="height:200px; width:auto;" src="https://storage.googleapis.com/fabric-deluxe-official/2019/08/1b52540d-happy-sewing-xo-fabric-deluxe-.jpg?fbclid=IwAR3tqc6P0IIUfeoiwlkXEz05iiNZS3IYqsbDzqOu7f1hq5W712hC6y-Nwf8" alt="">
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php get_footer(); ?>