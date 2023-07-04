<?php
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register Menu
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Header Menu'
    ));

    // Metabox
    // require_once('inc/coder-metabox/options.php');
});


function xtra_widgets()
{
    register_sidebar(array(
        'id' => 'blog_sidebar',
        'name' => 'Blog Sidebar',
        'description' => 'blog sidebar widgets',
        'before_title' => '<h2 class="mb-4 tm-post-title tm-color-primary">',
        'after_title' => '</h2>',
        'before_widget' => ' <hr class="mb-3 tm-hr-primary"><div class="xtra_widget xtra_%2$s">',
        'after_widget' => '</div>'
    ));


    // Custom Post Type Register
    register_post_type('teams', array(
        'labels' => array(
            'name' => 'Team Members',
            'add_new' => 'Add New Team Member',
            'add_new_item' => 'Add New Member',
            'edit_item' => 'Edit Member',
            'new_item' => 'New Member',
            'remove_featured_image' => 'Remove Team Member Photo',
            'featured_image' => 'Team Member Photo'
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-businessperson',
        'public' => true,
    ));


    // Custom Post Type for Gallery
    register_post_type('gallery', array(
        'labels' => array(
            'name' => 'Gallery',
            'add_new' => 'Add New Gallery',
            'add_new_item' => 'Add Gallery',
            'edit_item' => 'Edit Gallery'
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-businessperson',
        'public' => true,
    ));

    // Taxonomy Registration
    register_taxonomy('gallery_filter', 'gallery', array(
        'labels' => array(
            'name' => 'Filters',
            'singular name' => 'Filter',
            'search name' => 'Filter',
            'popular_items' => 'Gallery Filter',
            'all_items' => 'Gallery Filter',
            'parent_item' => 'Parent Filter',
            'add_new_item' => 'Add New Filter',
            'new_item_name' => 'New Filter',
            'not_found' => 'Filter not found'

        ),
        'public' => true,
        'hierarchical' => true
    ));
}

add_action('widgets_init', 'xtra_widgets');

// Register Nav Menu Walker
include_once('xtra-walker-nav-menu.php');



// Coder Metabox
require_once('inc/coder-metabox/coder-metabox.php');
// require_once('inc/coder-metabox/options.php');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-general-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Options',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-options',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Options',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-options',
    ));
}
