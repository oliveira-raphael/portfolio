<?php get_header(); ?>
<div id="page">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title() ?></h1>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
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