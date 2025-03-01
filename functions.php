<?php
add_theme_support('post-thumbnails');

function register_custom_menus()
{
    register_nav_menus(array(
        'header_menu' => __('Header Menu', 'wp_theme'), // 桌面菜单
        'mobile_menu' => __('Mobile Menu', 'wp_theme')  // 移动菜单
    ));
}
add_action('after_setup_theme', 'register_custom_menus');
