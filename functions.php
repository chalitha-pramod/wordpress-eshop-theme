<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function enqueue_files() {
    wp_enqueue_style("bootstrap",get_template_directory_uri() . "/assets/css/bootstrap.min.css" , array(), '1' );
    wp_enqueue_style("templatemo",get_template_directory_uri() . "/assets/css/templatemo.css" , array(), '1' );
    wp_enqueue_style("custom",get_template_directory_uri() . "/assets/css/custom.css" , array(), '1' );
    wp_enqueue_style("googleapis", "https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap" , array(), '1' );
    wp_enqueue_style("fontawesome",get_template_directory_uri() . "/assets/css/fontawesome.min.css" , array(), '1' );

    


    wp_enqueue_script("jquery", get_template_directory_uri() . "/assets/js/jquery-1.11.0.min.js" , array(), '1', 'all' );
    wp_enqueue_script("jquery-migrate", get_template_directory_uri() . "/assets/js/jquery-migrate-1.2.1.min.js" , array(), '1', 'all' );
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js" , array(), '1', 'all' );
    wp_enqueue_script("templatemo", get_template_directory_uri() . "/assets/js/templatemo.js" , array(), '1', 'all' );
    wp_enqueue_script("custom", get_template_directory_uri() . "/assets/js/custom.js" , array(), '1', 'all' );
    


}

add_action( 'wp_enqueue_scripts', 'enqueue_files' );



function file_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus( 
        array(
            'primary' => __('Main Menu' , 'gymfit'),
            'footer' => __('Footer Menu' , 'gymfit')
        )
    );
}
add_action('after_setup_theme', 'file_setup' );
  
function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_filter( 'woocommerce_show_page_title','__return_false' );
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );
add_theme_support( 'wc_product-gallary-zoom' );
add_theme_support( 'wc_product-gallary-lightbox' );
add_theme_support( 'wc_product-gallary-slider' );





?>
