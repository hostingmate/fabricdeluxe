			<?php get_header(); ?>

			<?php wc_print_notices(); ?>

			<?php echo do_shortcode('[smartslider3 slider=2]'); ?>

			<section id="content" class="container-fluid">
				
				<div class="row">
					<div class="container">
						<div class="row py-5">
							<div class="col-12" id="fd_latest_products">
								<h5 class="pb-3">NEW!</h5>
								<?php echo do_shortcode( '[recent_products limit="10" columns="5" orderby="date" order="DESC" visibility="visible"]' ); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="row py-5">
							<div class="col-12 text-center text-lg-left">
								<h5 class="pb-3">VIEW OUR COLLECTIONS</h5>
								<style>body.home .bg-dark * { color: white !important; } body mark { background: transparent; }</style>
								<?php echo do_shortcode( '[product_categories parent="1491" limit="5" columns="5" hide_empty="0" orderby="date" order="DESC" visibility="visible"]' ); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="row py-5">
							<div class="col-12 text-center text-lg-left">
								<h5 class="pb-3">SHOP OUR INSTAGRAM</h5>
								<script src='https://snapppt.com/widgets/widget_loader/10b8c0c2-5dff-43d4-925f-ce1151d19850/grid.js' defer class='snapppt-widget'></script>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container">
						<div class="row py-5 mb-5">
				    		<div class="col-4 col-lg-2 text-center"><img class="w-100 w-md-50" src="https://storage.googleapis.com/fabric-deluxe-official/2018/10/DPstudio100Pix.jpg"></div>
				    		<div class="col-4 col-lg-2 text-center"><img class="w-100 w-md-50" src="https://storage.googleapis.com/fabric-deluxe-official/2018/10/birch100px.jpg"></div>
				    		<div class="col-4 col-lg-2 text-center"><img class="w-100 w-md-50" src="https://storage.googleapis.com/fabric-deluxe-official/2018/10/SOI100Pix.jpg"></div>
				    		<div class="col-4 col-lg-2 text-center"><img class="w-100 w-md-50" src="https://storage.googleapis.com/fabric-deluxe-official/2018/10/tilly100Pix.jpg"></div>
				    		<div class="col-4 col-lg-2 text-center"><img class="w-100 w-md-50" src="https://storage.googleapis.com/fabric-deluxe-official/2018/10/Clover100Pix.jpg"></div>
				    		<div class="col-4 col-lg-2 text-center"><img class="w-100 w-md-50" src="https://storage.googleapis.com/fabric-deluxe-official/2018/10/Gutermann100Pix.jpg"></div>
						</div>
					</div>
				</div>

			</section>

			<?php get_footer(); ?>