<?php get_header(); ?>
<div id="page">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                    <a href="<?php echo get_permalink($post->ID) ?>">
                        <div class="article-item-thumb" style="background-image: url(
                            <?php if(get_post_thumbnail_id(get_the_ID())) {
                                echo "'".get_the_post_thumbnail_url()."'";
                                }
                                else {
                                    echo "'".esc_url(get_template_directory_uri().'/images/default-image.jpg')."'";
                                } ?>)">
                            <div class="article-item-thumb-filter"></div>
                        </div>
                    </a>
                    <div class="article-content">
                        <h1><?php the_title() ?></h1>
                        <div class="post-info">
                            <div>
                                <?php 
                                    echo get_avatar( get_the_author_meta( 'ID' ) , 55 );
                                ?>
                            </div>
                            <div>
                                <?php 
                                    echo "Publicado por ";
                                    echo get_the_author_posts_link();
                                    echo "<br />";
                                    echo get_the_date();
                                    echo ".";
                                ?>
                            </div>
                        </div>
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php endwhile; endif; ?>

                <div class="article-previous">
                    <?php 
                            previous_post_link();
                        ?>
                </div>
                <div class="article-next">
                    <?php 
                            next_post_link(); 
                        ?>
                </div>
                <div class="comments">
                    <?php comments_template(); ?>
                </div>
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