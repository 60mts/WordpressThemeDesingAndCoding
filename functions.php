<?php

function load_stylesheets()
{
    wp_register_style('stylesheet',get_template_directory_uri().'/style.css',array(),false,'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts','load_stylesheets');
add_filter('use_block_editor_for_post_type','__return_false',100);
add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu'=>__('Top Menu','theme'),
        'footer-menu'=>__('Footer Menu','theme'),
    )
    );