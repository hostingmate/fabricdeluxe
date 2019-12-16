			<?php get_header(); ?>

			<section id="content" class="container-fluid no-gutters my-5">
				<div class="row" id="content_main">
					<div class="container">
						<div class="row">
							<?php if ( is_product() ){ ?>
								<div class="col-12">
									<?php woocommerce_content(); ?>
								</div>
							<?php } else { ?>
								<div class="col-12 d-flex d-lg-none text-center mb-3">
									<button type="button" class="button w-50" data-toggle="modal" data-target="#filtersModal">Filters</button>
								</div>
								<div class="col-lg-3 d-none d-xl-block">
									<?php get_sidebar( 'woocommerce' ); ?>
								</div>
								<div class="col-12 col-lg-9">
									<?php woocommerce_content(); ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>

			<div class="modal fade" id="filtersModal" tabindex="-1" role="dialog" aria-labelledby="filtersModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="filtersModalLabel">Filters</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true"><i class="fal fa-times"></i></span>
							</button>
							</div>
							<div class="modal-body">
								<?php get_sidebar( 'woocommerce-mobile' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php get_footer(); ?>