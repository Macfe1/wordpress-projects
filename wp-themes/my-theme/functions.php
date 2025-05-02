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
        '1.0', 
        true // Esto hace que se cargue al final del body
    );
}
add_action('wp_enqueue_scripts', 'mi_tema_scripts');


?>