<?php

/*

	===========================

	TITLES

	===========================

*/

function fd_title_search() { echo
    '<div id="title" class="row">
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-6">
                    <h4 class="d-flex align-items-center h-100">Search</h4>
                </div>
                <div class="col-6 d-none d-md-flex">'; ?>
                    <?php woocommerce_breadcrumb(); ?>
                <?php echo '</div>
            </div>
        </div>
    </div>';
}
function fd_title_product_category() { echo
    '<div id="title" class="row">
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-6">'; ?>
                    <h4 class="d-flex align-items-center h-100"><?php single_cat_title(); ?></h4>
                <?php echo '</div>
                <div class="col-6 d-none d-md-flex">'; ?>
                    <?php woocommerce_breadcrumb(); ?>
                <?php echo '</div>
            </div>
        </div>
    </div>';
}
function fd_title_shop() { echo
    '<div id="title" class="row">
        <div class="container">
            <div class="row h-100">
                <div class="col-12">
                    <h4 class="d-flex align-items-center h-100">Shop</h4>
                </div>
            </div>
        </div>
    </div>';
}
function fd_title_wishlist() { echo
    '<div id="title" class="row">
        <div class="container">
            <div class="row h-100">
                <div class="col-12">
                    <h4 class="d-flex align-items-center h-100">Wishlist</h4>
                </div>
            </div>
        </div>
    </div>';
}
function fd_title_default() { echo
    '<div id="title" class="row">
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-6">'; ?>
                    <?php if( have_posts() ): while( have_posts() ): the_post(); ?> <h4 class="d-flex align-items-center h-100"><?php the_title(); ?></h4> <?php endwhile; endif; ?>
                <?php echo' </div>
                <div class="col-6 d-none d-md-flex">'; ?>
                    <?php woocommerce_breadcrumb(); ?>
                <?php echo '</div>
            </div>
        </div>
    </div>';
}
function fd_title_blog() { echo
    '';
}