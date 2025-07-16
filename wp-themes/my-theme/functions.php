<?php
//Activate support for the menu
add_theme_support('menus');

//Register the menu
function register_menu() {
    register_nav_menus(
        array(
            'menu-principal' => __('Menú Principal'),
        )
    );
}
add_action('init', 'register_menu');

//link styles
function mi_tema_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_styles');

//Link the .js file
function mi_tema_scripts() {
    wp_enqueue_script(
        'main-js', 
        get_template_directory_uri() . '/js/main.js', 
        array(), 
        '1.1', 
        true // To load at the end of the body
    );
}
add_action('wp_enqueue_scripts', 'mi_tema_scripts');

function my_enqueue_mapbox_assets() {
    wp_enqueue_style('mapbox-gl-css', 'https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css');
    wp_enqueue_script('mapbox-gl-js', 'https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js', array(), null, true);
    wp_enqueue_script('mapbox-init', get_template_directory_uri() . '/js/mapbox-init.js', array('mapbox-gl-js'), null, true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_mapbox_assets');

?>