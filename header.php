<html class="m-0">
	<head>
		<meta name="theme-color" content="#1e1b3c">
		<meta name="msapplication-navbutton-color" content="#1e1b3c">
		<meta name="apple-mobile-web-app-status-bar-style" content="#1e1b3c">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Fabric Deluxe</title>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >

			<section id="header" class="container-fluid no-gutters">

				<?php get_template_part( 'inc/header', 'default' ); ?>

				<?php if( is_search() ) {
					fd_title_search();
				} else if( is_product() || is_account_page() || is_page( 'contact' ) || is_page( 'shipping' ) || is_page( 'privacy' ) || is_page( 'terms' ) || is_page( 'faq' ) || is_page( 'about' ) || is_page( 'home' ) || is_404() || is_single() ) {
					echo '';
				} else if( is_product_category() ) {
					fd_title_product_category();
				} else if( is_shop() ) {
					fd_title_shop();
				} else if( is_page( 'wishlist' ) ) {
					fd_title_wishlist();
				} else if( is_home() ) {
					fd_title_blog();
				} else {
					fd_title_default();
				} ?>

			</section>