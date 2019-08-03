<?php
function add_class_to_last_item_in_wp_nav_menu($items) {
    $items[1]->classes[] = 'first';
    $items[count($items)]->classes[] = 'last';
    return $items;
}
add_filter('wp_nav_menu_objects', 'add_class_to_last_item_in_wp_nav_menu');