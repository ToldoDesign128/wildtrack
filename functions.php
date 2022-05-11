<?php

function Wild_setup() {
    // Enable title in header
    add_theme_support( "title-tag" );
    // Enable featured image
    add_theme_support( "post-thumbnails" );
    // Custom menu areas
    register_nav_menus( array(
        'header' => esc_html__('Header', 'slug-theme')
    ));
}
add_action( 'after_setup_theme','Wild_setup');




//add CSS
function Wild_styles() {
    /* Bootstrap */
    wp_enqueue_style("Wild-grid", get_template_directory_uri().'/css-parts/bootstrap-grid.min.css');
    /*My CSS */
    wp_enqueue_style( "Wild-styles", get_template_directory_uri( ).'/style.min.css');
}
add_action( 'wp_enqueue_scripts', 'Wild_styles' );

//add JS
function Wild_scripts() {
    // wp_enqueue_script("Wild-script-in-view", get_template_directory_uri().'/js/', array("jquery"), null, true);
    wp_enqueue_script("Wild-scriptjs", get_template_directory_uri().'/js/script.js', array("jquery"), null, true);
}
add_action("wp_enqueue_scripts", "Wild_scripts");

//add Adobe font
function Adobe_fonts() {
    wp_enqueue_style( 'Adobe-fonts', 'https://use.typekit.net/cvu7wcg.css', false );
}
add_action( 'wp_enqueue_scripts', 'Adobe_fonts' );

?>