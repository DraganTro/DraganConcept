<?php

// Ajoute la prise en charge des menus dans le thème
function theme_setup() {
    // Enregistre un emplacement de menu principal
    register_nav_menus(array(
        'primary-menu' => __('Menu principal', 'dragan-concept'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

// Ajoute des styles personnalisés
function theme_enqueue_styles() {
    wp_enqueue_style('theme-styles', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');