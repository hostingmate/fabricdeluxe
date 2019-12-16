			<?php get_header(); ?>

			<section id="content" class="container-fluid my-5">
				<div class="row" id="content_main">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<?php do_action( 'theme_notices' ); ?>
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