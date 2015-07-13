<?php

include('inc/my-functions.php');
include('inc/pagination.php');
//add navbar
register_nav_menu('top_menu','منو اصلی');

//admin panel
require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');



// Add support post formats
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );



// Add thumbnail supprt
add_theme_support( 'post-thumbnails' );
if (function_exists('add_image_size')):
add_image_size('film_thumbs',150,150);
endif;