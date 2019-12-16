			<?php get_header(); ?>

			<section id="content" class="container-fluid my-5">
				<div class="row" id="content_main">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-7">
								<div class="row px-5">
									<?php
										if( have_posts() ):
											while( have_posts() ): the_post();

												echo '<div class="d-block p-3 pr-0 mb-3" style="border-left:solid 3px #fad8d7">';

													// Display post title
													echo '<h1 class="d-block text-uppercase m-0" style="font-weight:100;">'; the_title(); echo '</h1>';

													// Display post date
													echo '<h6 class="d-block m-0" style="color:#c5c5c5;">'.get_the_date().'</h6>';

												echo '</div>';

												// Display post content
												the_content();
											endwhile;
										endif;
									?>
								</div> <!-- end row -->
							</div>
							<div class="col-3">
								<?php get_sidebar(); ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php get_footer(); ?>