<?php

// Ajoute la prise en charge des menus dans le thème
function theme_setup() {
    // Enregistre un emplacement de menu principal
    register_nav_menus(array(
        'primary-menu' => __('Menu principal', 'dragan-concept'),
        'mobile-menu' => __('Menu mobile', 'dragan-concept'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

// Ajoute des styles personnalisés
function theme_enqueue_styles() {
    wp_enqueue_style('theme-styles', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('contact-styles', get_stylesheet_directory_uri() . '/css/contact-style.css');
    wp_enqueue_style('portfolio-styles', get_stylesheet_directory_uri() . '/css/portfolio-style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Chargement de jQuery et du script.js
function theme_enqueue_scripts() {
    // Enqueue WordPress-bundled jQuery
    wp_enqueue_script('jquery');

    // Enqueue your custom script
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');



?>



