<?php
//Activer le support des menus dans le theme
add_theme_support('menus');

//Déclarer deux "emplacements" de menus :
//Déclaration d'une fonction utilisateur qu'on va faire appeler par WP

// - un menu de header
// - un menu de footer
function register_my_menus() {
   // Appel d'une méthode de Wordpress

    register_nav_menus(
        array(
            'header_menu' => __('Header'),
            'footer_menu' => __('Footer'),


        )
    );

}
//Au démarrage (init), WP appelle la fonction "register_my_menus"
add_action('init', 'register_my_menus');

//Gestion des images thumbnails a la une
add_theme_support('post-thumbnails');