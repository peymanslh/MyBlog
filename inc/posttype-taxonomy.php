<?php

function project()
{
    $labels = array(
        'name' => __('Project', 'myblog'),
        'singular_name' => __('Project', 'myblog'),
        'add_new' => __('Add project', 'myblog'),
        'add_new_item' => __('Add new project', 'myblog'),
        'edit_item' => __('Edit', 'myblog'),
        'new_item' => __('New project', 'myblog'),
        'all_items' => __('All project', 'myblog'),
        'view_item' => __('View Project', 'myblog'),
        'search_items' => __('Search', 'myblog'),
        'not_found' => __('Nothing found!', 'myblog'),
        'not_found_in_trash' => __('Trash is empty', 'myblog'),
        'parent_item_colon' => '',
        'menu_name' => __('Project', 'myblog'),
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Other project', 'myblog'),
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'custom-fields', 'author', 'trackbacks', 'revisions', 'page-attributes', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('post_tag'),
        'has_archive' => true,
    );
    register_post_type('project', $args);
}

add_action('init', 'project');


//taxonomy
function cat_project()
{
    $labels = array(
        'name' => __('Category', 'myblog'),
        'singular_name' => __('Category', 'myblog'),
        'search_items' => __('Search', 'myblog'),
        'all_items' => __('All Categories', 'myblog'),
        'parent_item' => __('Parent category', 'myblog'),
        'parent_item_colon' => __('Parent category:', 'myblog'),
        'edit_item' => __('Edit', 'myblog'),
        'update_item' => __('Update', 'myblog'),
        'add_new_item' => __('Add new', 'myblog'),
        'new_item_name' => __('Add', 'myblog'),
        'menu_name' => __('Category', 'myblog'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy('cat_project', 'project', $args);
}

add_action('init', 'cat_project', 0);
