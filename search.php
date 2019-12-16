			<?php get_header(); ?>

			<section id="content" class="container-fluid no-gutters my-5">
				<div class="row" id="content_main">
					<div class="container">
						<div class="row">
							<?php if ( is_search() ){ ?>
								<div class="col-3">
									<?php get_sidebar( 'woocommerce' ); ?>
								</div>
								<div class="col-9">
									<?php
										if( have_posts() ):
											while( have_posts() ): the_post();
												the_content();
											endwhile;
										else : ?>
											<h6 class="mt-3">Sorry, but nothing matched your search terms. Please try again with some different keywords.</h6>
										<?php endif;
									?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<?php get_footer(); ?>