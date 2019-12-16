			<?php get_header(); ?>

			<section id="content" class="container-fluid my-5">
				<div class="row" id="content_main">
					<div class="container">
						<div class="row">
							<div class="col-9">
								<div class="row">
									<?php
										if( have_posts() ):
											while( have_posts() ): the_post(); ?>

												<div class="col-12 mb-5">
													<a href="<?php echo get_permalink(); ?>">
														<div class="card text-center border-0 shadow">
															<div class="card-img-top">
																<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
															</div>
															<h3 class="card-title text-uppercase float-right"><?php the_title(); ?></h3>
															<div class="card-body">
																<div class="row">
																	<div class="col-12 col-md-3 order-2 order-md-1 text-center">
																		<small><?php echo get_the_date( get_option( 'date_format' ) ); ?></small>
																	</div>
																	<div class="col-12 col-md-9 order-1 order-md-2 text-left">
																		<div class="card-text"><?php the_excerpt(); ?></div>
																	</div>
																</div>
															</div>
														</div>
													</a>
												</div>

											<?php endwhile;
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