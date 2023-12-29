<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function theme_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 15 );


/* HOOK admin */

// Fonction pour ajouter le lien "Admin" dans le menu
function add_admin_link($items, $args) {
    // Vérifie si l'utilisateur est connecté 
    if (is_user_logged_in()) {
        $items .= '<li class="admin-link"><a href="' . get_admin_url() . '" >Admin</a></li>';
    }
    return $items;
}

// Hook pour ajouter le lien "Admin" dans le menu
add_filter( 'wp_nav_menu_items', 'add_admin_link', 10, 2 );

