<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="nav-container">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/gus_logo.png" alt="Logo">
            <a href="https://wa.me/c/573102338458" target="_blank">GUS BITES</a>
        </div>
        <div class="contenedor-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-principal',
                'container' => 'div',
                'container_class' => 'menu-landing-page-menu-container',
                'container_id'   => 'menu-lateral',
                'menu_class' => 'mi-menu'
            ));
            ?>
            <button class="menu-toggle" aria-label="Abrir menú" aria-expanded="false" aria-controls="menu-lateral">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>
