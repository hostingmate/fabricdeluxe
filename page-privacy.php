			<?php get_header(); ?>

			<section id="content" class="container-fluid no-gutters my-5">
				<div class="row" id="content_main">
					<div class="container">
						<div class="row my-5">
							<div class="col-12 my-5 text-center">
								<h1>Privacy Policy</h1>
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