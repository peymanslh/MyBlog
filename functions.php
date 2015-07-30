<?php

// Other files -------------------------------
require_once(TEMPLATEPATH . '/inc/my-functions.php');
require_once(TEMPLATEPATH . '/inc/pagination.php');

// project post type -------------------------------
require_once(TEMPLATEPATH . '/inc/posttype-taxonomy.php');

//add navbar -------------------------------
register_nav_menu('top_menu','منو اصلی');

// Change gallery output
require_once(TEMPLATEPATH . '/inc/my-media.php');


//admin panel -------------------------------
require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');

// Add support post formats -------------------------------
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

// Add thumbnail supprt -------------------------------
add_theme_support( 'post-thumbnails' );
if (function_exists('add_image_size')):
add_image_size( 'gallery_thumb', 200, 400, true );
add_image_size( 'project_thumb', 500, 500, true );
add_image_size('film_thumbs',150,150);
endif;

// add support widget -------------------------------
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name'          => 'right-sidebar',
'description'   => 'ناحیه قرار گیری ابزارک در سما راست',
'before_widget' => '<section class="right-sidebar"><section>',
'after_widget'  => '</section></section>',
'before_title'  => '<h3><span>',
'after_title'   => '</h3></span>',
));





