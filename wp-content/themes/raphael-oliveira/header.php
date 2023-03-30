<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="header">
        <div class="container">
            <div id="masterhead" class="row align-items-center">
                <div id="logomarca" class="col-9 col-lg-5 col-xl-4">
                    <a href="<?php echo get_site_url() ?>" alt="<?php echo get_bloginfo() ?>">
                        <?php
                            if (has_custom_logo()) {
                                the_custom_logo();
                            } else {
                                echo "<img src=\"".get_template_directory_uri()."/images/logomarca.png\" />";
                            }
                        ?>
                    </a>
                </div>
                <div class="col">
                    <div class="menu-mobile">
                        <div class="wrapper">

                            <button id="bt-menu-mobile">
                                <span class="top"></span>
                                <span class="middle"></span>
                                <span class="bottom"></span>
                            </button>
                            <div class="clear"></div>
                        </div>
                        <div id="wrapper-menu-mobile">
                        </div>
                    </div>
                    <nav id="mainmenu">
                        <i class="fa fa-arrow-right fechar-mobile"></i>
                        <?php
                        	wp_nav_menu( array( 'theme_location' => 'mainmenu','container_class' => 'menu-principal' ) );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php 
        if(is_front_page()):
    ?>
    <div class="row no-gutters">
        <div class="col">
            <div id="slidehome">
                <?php
                    $args = array('post_type'=>'slide', 'post_status'=>'publish');
                    $slide = get_posts( $args );
                    if($slide) : foreach($slide as $post) : setup_postdata($post);
                ?>

                <div class="slide-item" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
                    <div class="slide-filtro"></div>
                    <div class="slide-conteudo">
                        <div class="row">
                            <div class="container">
                                <div class="slide-texto">
                                    <h1><?php the_title() ?></h1>
                                    <p><?php echo get_field('slide_text', $id_post) ?></p>
                                    <a class="button" href="<?php echo get_field('slide_url', $id_post) ?>"
                                        title="<?php the_title() ?>"><?php echo get_field('slide_btn', $id_post) ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                    endif;
                ?>
            </div>
        </div>
    </div>
    <?php 
        endif;
    ?>