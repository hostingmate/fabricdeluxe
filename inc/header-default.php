				<div id="header_top" class="row">
					<div class="container">
						<div class="row justify-content-center justify-content-xl-end">
							<?php wp_nav_menu( array( 'theme_location'=>'header_top','container'=>'div','container_class'=>'menu-top navbar','menu_class'=>'menu nav fd_justify-content-end', 'items_wrap'=>'<ul id = "%1$s" class = "%2$s">%3$s</ul>') ) ?>
						</div>
					</div>
				</div>

				<div id="header_bottom" class="row">
					<div class="container">
						<div class="row h-100">

							<nav class="navbar navbar-expand-lg w-100 h-100 p-0">

								<a class="navbar-brand justify-content-start p-0" <?php echo 'href="' . get_home_url() . '"'; ?> >
									<img src="https://storage.googleapis.com/fabric-deluxe-official/2019/02/FabricDeluxe-Logo-BLACK.png" alt="">
								</a>

								<div class="collapse navbar-collapse justify-content-center d-none d-lg-flex w-100 top-sm-100 top-lg-unset h-100" id="navbarNav">
								    <?php wp_nav_menu( array( 'theme_location'=>'header_bottom','container'=>'div','container_class'=>'menu-bottom h-100','menu_class'=>'menu nav nav-fill h-100 primary','link_before'=>'','link_after'=>'', 'items_wrap'=>'<ul id = "%1$s" class = "%2$s">%3$s</ul>') ) ?>
								</div>

								<div class="col-12 fixed-top h-100 w-100" id="sideNav" style="left:-100%; overflow-y:scroll;">
									<button class="fal fa-times fa-2x" type="button" onclick="closeNav()"></button>
									<div style="position:relative" class="w-100 text-center">
										<img class="h-auto w-50 w-md-25" src="https://storage.googleapis.com/fabric-deluxe-official/2019/02/FabricDeluxe-Logo-BLACK.png" alt="">
									</div>
									<?php wp_nav_menu( array( 'theme_location'=>'mobile','container'=>'div','container_class'=>'menu-bottom h-100','menu_class'=>'menu nav','link_before'=>'','link_after'=>'', 'items_wrap'=>'<ul id = "%1$s" class = "%2$s">%3$s</ul>') ) ?>
								</div>

								<div class="justify-content-end d-flex" id="header_bottom_right">
									<?php
										function is_site_admin(){
										    return in_array('administrator',  wp_get_current_user()->roles);
										}

										if( is_site_admin() ) {
											echo '<button type="button" title="Register" class="border-0"><a class="fal fa-cash-register" href="http://localhost/fabricdeluxe/point-of-sale/fabric-deluxe/front"></a></button>
											<button type="button" title="Backend" class="border-0"><a class="fal fa-door-open" href=" ' . get_admin_url() . ' "></a></button>';
										} else {
											if( is_user_logged_in() ) {
												echo '<a id="user_i" href=" '. site_url() . '/my-account"><button type="button" class="fal fa-user h-100" title="My Account"></button></a>';
											} elseif( ! is_user_logged_in() ) {
												echo '<button id="user_i" type="button" class="fal fa-user" data-toggle="modal" data-target="#loginModal" title="My Account"></button>';
											}
											echo '<button id="cart_i" type="button" class="fal fa-shopping-bag" data-toggle="modal" data-target="#cartModal" title="Cart"></button>
											<button type="button" class="fal fa-search" title="Search" id="search_bar_btn"></button>';
										}
									?>
									<button class="fal fa-bars d-inline-block d-lg-none" type="button" onclick="openNav()"></button>
									<script>
									function openNav() {
									  jQuery("#sideNav").css("left", "0");
									  jQuery("#sideNav").addClass('open');
									};
									function closeNav() {
									  jQuery("#sideNav").css("left", "-100%");
									  jQuery("#sideNav").addClass('closed');
									};
									</script>
								</div>

							</nav>

						</div>
					</div>
				</div>

				<div id="search_form" class="row" style="display:none">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="w-100 border-0 search-field" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
									<input type="hidden" name="post_type" value="product" />
								</form>
							</div>
						</div>
					</div>
				</div>