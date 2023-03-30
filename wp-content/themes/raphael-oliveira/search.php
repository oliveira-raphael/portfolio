<?php get_header(); ?>
<div id="page">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1>Resultados da Pesquisa</h1>
                <p>Você está buscando por: <strong><em><?php echo $s ?></em></strong></p>
                <?php 
                if ( have_posts() ) : 
                    
                    while ( have_posts() ) : the_post();
                    ?>
                <article>
                    <div class="article-content">
                        <h1><a href="<?php echo get_permalink()?>"><?php the_title() ?></a></h1>
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <?php 
                    endwhile; 
                    else : 
                    ?>
                <p>Infelizmente não encontramos nenhum resultado para sua busca.<br /> Tente novamente usando termos
                    diferentes.</p>

                <a href="<?php echo get_site_url() ?>" class="button">Voltar para a página inicial</a>
                <?php    
                    endif;
                    
                    the_posts_pagination( array(
                        'screen_reader_text' => __( '&nbsp;' )
                    ) );
                ?>
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