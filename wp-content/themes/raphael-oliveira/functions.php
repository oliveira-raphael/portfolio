<?php

add_action( 'wp_enqueue_scripts', 'loadstyles' );
add_action( 'wp_footer', 'loadscripts' );
add_action( 'init', 'mainmenu' );
add_action( 'init', 'register_slide' );
add_action( 'widgets_init', 'iniciar_widgets' );
add_action( 'after_setup_theme', 'woocommerce_support' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

add_theme_support( 'title-tag' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );

add_filter('loop_shop_columns', 'colunas_loja');
add_filter( 'excerpt_length', 'post_excerpt_length' );
add_filter('excerpt_more', 'post_excerpt_read_more');

function loadstyles(){
    //carrega estilos
    wp_enqueue_style( 'ResetCSS', get_template_directory_uri().'/css/reset.css' );
    wp_enqueue_style( 'Slick', get_template_directory_uri().'/css/slick.css' );
    wp_enqueue_style( 'Slick Theme', get_template_directory_uri().'/css/slick-theme.css' );
    wp_enqueue_style( 'Bootstrap', get_template_directory_uri().'/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'Style', get_template_directory_uri().'/style.css','', filemtime(get_stylesheet_directory()."/style.css"));
    wp_enqueue_style( 'Responsive', get_template_directory_uri().'/css/responsivo.css','', filemtime(get_stylesheet_directory()."/css/responsivo.css") );
}

function loadscripts(){
    //carrega js
    wp_enqueue_script( 'Jquery3x', get_template_directory_uri().'/js/jquery-3.4.1.min.js' );
    wp_enqueue_script( 'Slick Min Js', get_template_directory_uri().'/js/slick.min.js' );
    wp_enqueue_script( 'Font Icons', 'https://kit.fontawesome.com/e87b3ef518.js' );
    wp_enqueue_script( 'ThemeJS', get_template_directory_uri().'/js/olweb.js','', filemtime(get_stylesheet_directory()."/js/olweb.js") );
}

function mainmenu() {
    register_nav_menu('mainmenu',__( 'Main Menu' ));
}

function woocommerce_support() {
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 150,
		'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
	) );
}

if (!function_exists('colunas_loja')) {
    //quantidades de colunas da loja
	function colunas_loja() {
		return 4; // 4 produtos por linha
	}
}

//suporte ACF
define( 'MY_ACF_PATH', get_template_directory() . '/plugins/advanced-custom-fields/' );
define( 'MY_ACF_URL', get_template_directory_uri() . '/plugins/advanced-custom-fields/' );
require_once(get_template_directory()."/plugins/advanced-custom-fields/acf.php");
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

function iniciar_widgets() {
    //resgistro de sidebars
    register_sidebar( array(
        'name'          => __( 'Barra Lateral', 'sidebar-1' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Área de widgets barra lateral', 'sidebar-1' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
	    'before_title'  => '<h2 class="widgettitle">',
	    'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Rodape 1', 'rodape-1' ),
        'id'            => 'rodape-1',
        'description'   => __( 'Área de widgets rodapé', 'rodape-1' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
	    'before_title'  => '<h2 class="widgettitle">',
	    'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Rodape 2', 'rodape-2' ),
        'id'            => 'rodape-2',
        'description'   => __( 'Área de widgets rodapé', 'rodape-2' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
	    'before_title'  => '<h2 class="widgettitle">',
	    'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Rodape 3', 'rodape-3' ),
        'id'            => 'rodape-3',
        'description'   => __( 'Área de widgets rodapé', 'rodape-3' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
	    'before_title'  => '<h2 class="widgettitle">',
	    'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Rodape 4', 'rodape-4' ),
        'id'            => 'rodape-4',
        'description'   => __( 'Área de widgets rodapé', 'rodape-4' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget'  => '</div>',
	    'before_title'  => '<h2 class="widgettitle">',
	    'after_title'   => '</h2>',
    ) );
}

function register_slide() {
    $labels = array(
        'name' => _x('Slide Show', 'post type general name'),
        'singular_name' => _x('Slide', 'post type singular name'),
        'add_new' => _x('Adicionar Slide', 'Slide'),
        'add_new_item' => __('Adicionar Slide'),
        'edit_item' => __('Editar Slide'),
        'new_item' => __('Novo Slide'),
        'view_item' => __('Ver Slide'),
        'search_items' => __('Buscar Slide'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado na lixeira'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail'),
        'rewrite' => array('slug' => 'slide', 'with_front' => FALSE)
      ); 
    register_post_type( 'slide' , $args );
}

function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 48,
    'width'       => 248,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

function post_excerpt_length($length) {
    //define o tamanho do resumo do post
    $excerpt = get_theme_mod('exc_lenght', '35');
    return $excerpt;
}

function post_excerpt_read_more($more) {
    //adiciona o botão Continuar lendo
    global $post;
 return ' ...';
}

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5e6a85c74351c',
        'title' => 'Slide Show',
        'fields' => array(
            array(
                'key' => 'field_5e6a85da9e2d6',
                'label' => 'Texto do Slide',
                'name' => 'slide_text',
                'type' => 'text',
                'instructions' => 'Insira o texto do slide.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e6a86ab9e2d8',
                'label' => 'Texto do botão',
                'name' => 'slide_btn',
                'type' => 'text',
                'instructions' => 'Insira o texto do botão.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e6a864e9e2d7',
                'label' => 'Link do botão',
                'name' => 'slide_url',
                'type' => 'url',
                'instructions' => 'Insira o link do botão.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'slide',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;