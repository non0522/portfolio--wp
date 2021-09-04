<?php 


/* テーマ機能のサポート
   ========================================================================== */
    function custom_theme_support() {
        add_theme_support( 'html5', array(
            'search-form', 
            'comment-form', 
            'comment-list', 
            'caption',
        ));

        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        /* ナビメニューの定義と設定*/
        register_nav_menus(array(
            'gnav' => esc_html__('gnav', 'portfolio'),
        ));
    }
    add_action( 'after_setup_theme', 'custom_theme_support' );


    /* <head>の設定
   ========================================================================== */
   function portfolio_script(){
    $locale = get_locale();
    $locale = apply_filters('theme_locale', $locale, 'portfolio');
    wp_enqueue_style('ress', '//unpkg.com/destyle.css@1.0.5/destyle.css', array(), '1.0.5');
    if( $locale == 'ja' ) {
        wp_enqueue_style('Opensans', '//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap', array(), '') ;
        }
    wp_enqueue_script('jquery', get_template_directory_uri().'//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',"", array(), '3.6.0', true);
    wp_enqueue_script('swiperjs', get_template_directory_uri().'/js/swiper-bundle.min.js',array(), '7.0.1', true);
    wp_enqueue_script('bubbly-bg', get_template_directory_uri().'/js/bubbly-bg.js',array(), '1.0.0', true);
    wp_enqueue_script('bubbly', get_template_directory_uri().'/js/bubbly.js',array(), '1.0.0', true);
    wp_enqueue_script('stylejs', get_template_directory_uri().'/js/style.js',array(), '1.1.0', true);
    wp_enqueue_style('swipercss', get_template_directory_uri().'/css/swiper-bundle.min.css',array(), '7.0.1');
    wp_enqueue_style('portfolio', get_template_directory_uri().'/css/style.css',array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'portfolio_script' );
