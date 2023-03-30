<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.4.0
 */

get_header(); ?>
<div id="page">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <?php woocommerce_content(); ?>
            </div>
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <div class="col-sm-3">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>