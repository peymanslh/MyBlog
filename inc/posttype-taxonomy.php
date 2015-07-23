<?php

function project() {
    $labels = array(
        'name'               => _x( 'پروژه ها', 'post type general name' ),
        'singular_name'      => _x( 'پروژه ها', 'post type singular name' ),
        'add_new'            => _x( 'اضافه کردن پروژه', 'book' ),
        'add_new_item'       => __( 'پروژه جدید' ),
        'edit_item'          => __( 'ویرایش' ),
        'new_item'           => __( 'پروژه جدید' ),
        'all_items'          => __( 'همه پروژه ها' ),
        'view_item'          => __( 'مشاهده پروژه' ),
        'search_items'       => __( 'جستجو' ),
        'not_found'          => __( 'پروژه ای یافت نشد' ),
        'not_found_in_trash' => __( 'دفتری در سطل آشغال نیست' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'پروژه ها'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'سایر پروژه ها',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'custom-fields', 'author', 'trackbacks', 'revisions', 'page-attributes', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies' => array('post_tag'),
        'has_archive'   => true,
    );
    register_post_type( 'project', $args );
}
add_action( 'init', 'project' );



//taxonomy
function cat_project() {
    $labels = array(
        'name'              => _x( 'دسته بندی پروژه ها', 'taxonomy general name' ),
        'singular_name'     => _x( 'دسته بندی پروژه ها', 'taxonomy singular name' ),
        'search_items'      => __( 'جستجو در دسته بندی پروژه ها' ),
        'all_items'         => __( 'همه دسته بندی ها' ),
        'parent_item'       => __( 'دسته پدر' ),
        'parent_item_colon' => __( 'دسته پدر:' ),
        'edit_item'         => __( 'ویرایش' ),
        'update_item'       => __( 'بروزرسانی' ),
        'add_new_item'      => __( 'اضافه کردن' ),
        'new_item_name'     => __( 'افزودن دسته' ),
        'menu_name'         => __( 'دسته پروژه ها' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'cat_project', 'project', $args );
}
add_action( 'init', 'cat_project', 0 );