<footer>
    <div class="container">
        <div id="widgetrow" class="row align-items-start">
            <?php if ( is_active_sidebar( 'rodape-1' ) ) : ?>
            <div class="col-sm">
                <?php dynamic_sidebar( 'rodape-1' ); ?>
            </div>
            <?php endif;
                    if ( is_active_sidebar( 'rodape-2' ) ) : ?>
            <div class="col-sm">
                <?php dynamic_sidebar( 'rodape-2' ); ?>
            </div>
            <?php endif;
                    if ( is_active_sidebar( 'rodape-3' ) ) : ?>
            <div class="col-sm">
                <?php dynamic_sidebar( 'rodape-3' ); ?>
            </div>
            <?php endif;
                    if ( is_active_sidebar( 'rodape-4' ) ) : ?>
            <div class="col-sm">
                <?php dynamic_sidebar( 'rodape-4' ); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div id="copy">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm textleft">
                    <?php echo get_bloginfo()." &copy; ".date('Y') ?>. Todos os direitos reservados.
                </div>
                <div class="col-sm textright">
                    <a class="olweb" href="https://olweb.com.br" target="_blank"><img src="https://olweb.com.br/images/copyright/olweb-black.png" /></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>