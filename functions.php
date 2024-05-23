<?php
add_action( 'wp_enqueue_scripts', 'foce_enqueue_styles' );
function foce_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/scripts-child/jquery-3.7.1.js');
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/scripts-child/script.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-parallax', get_stylesheet_directory_uri() . '/scripts-child/jquery-parallax.js', array('jquery'), '1.0', true);
    wp_enqueue_script ('swiper-bundle', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), '10.0.0', true);
    wp_enqueue_script('swiper-script', get_stylesheet_directory_uri() . '/scripts-child/swiper-script.js', array('swiper-bundle'), '1.0.0', true);
    wp_enqueue_style( 'swiper-style', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), '10.0.0');

}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}