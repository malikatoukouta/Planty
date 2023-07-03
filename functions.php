<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_filter('wpc7_autop_or_not','__return_false');

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in()) {
        $items = '<li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="http://localhost/planty/nous-rencontrer/" class = "hfe-menu-item">Nous rencontrer</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="http://localhost/planty/">Admin</a></li>
        <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="http://localhost/planty/precommande/" class = "hfe-menu-item">Commander</a></li>
        ';
    }
    
    return $items;
}
