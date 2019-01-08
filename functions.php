<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}


function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'white', 'themeLangDomain' ),
            'slug' => 'white',
            'color' => '#fff',
        ),
        array(
            'name' => __( 'MineShaft', 'themeLangDomain' ),
            'slug' => 'mineshaft',
            'color' => '#4A4A4A',
        ),
        array(
            'name' => __( 'Mongoose', 'themeLangDomain' ),
            'slug' => 'mongoose',
            'color' => '#B09F82',
        ),
        array(
            'name' => __( 'Pickled Bean', 'themeLangDomain' ),
            'slug' => 'pickled-bean',
            'color' => '#8B572A',
        ),
    ) );
}


?>