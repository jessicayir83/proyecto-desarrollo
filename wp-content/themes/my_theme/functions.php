<?php

if(!defined('ABSPATH')) exit;

function my_theme_styles(){
    wp_enqueue_style('my_styles', get_stylesheet_directory_uri() .'/styles/css/styles.css', array());
}
add_action('wp_enqueue_scripts','my_theme_styles');


register_nav_menus(array(
    'main-menu'=> esc_html__('Main menu', 'my_theme'),
));


