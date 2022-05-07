<?php

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


?>