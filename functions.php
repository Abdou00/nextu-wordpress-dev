<?php
// On défini que TEMPPATH sera le chemin d'accès au répertoire de notre thème.
define('TEMPPATH', get_bloginfo('stylesheet_directory'));
// On defini le chemin des images
define('IMAGES', TEMPPATH . 'images');
// add_theme_support() permet de créé des menus dynamiques
add_theme_support('nav-menus');
// On check si la fonction existe
if (function_exists('register_nav_menus')) {
    // On appel la fonction
    register_nav_menus(
        // On lui envoi un tableau de menus
        array(
            'Main' => 'Main Nav'
        )
    );
}

if ( function_exists( 'register_sidebar' ) ) { register_sidebar( array (
    'name' => __( 'Primary Sidebar', 'primary-sidebar' ), 'id' => 'primary-widget-area',
    'description' => __( 'The primary widget area', 'dir' ), 'before_widget' => '<div class="widget">', 'after_widget' => "</div>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>', ) );
}
?>