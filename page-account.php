			<?php get_header(); ?>

			<section id="content" class="container-fluid no-gutters mb-5 mt-0 my-lg-5">
				<div class="row" id="content_main">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center align-self-center align-content-center">
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