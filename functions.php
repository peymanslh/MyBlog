<?php

// Other files -------------------------------
require_once(TEMPLATEPATH . '/inc/my-functions.php');
require_once(TEMPLATEPATH . '/inc/pagination.php');

// project post type -------------------------------
require_once(TEMPLATEPATH . '/inc/posttype-taxonomy.php');

//add navbar -------------------------------
register_nav_menu('top_menu', 'منو اصلی');

// Change gallery output
require_once(TEMPLATEPATH . '/inc/my-media.php');

//admin panel -------------------------------
require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');

// Add support post formats -------------------------------
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

// Add thumbnail supprt -------------------------------
add_theme_support('post-thumbnails');
if (function_exists('add_image_size')):
    add_image_size('gallery_thumb', 200, 400, true);
    add_image_size('project_thumb', 500, 500, true);
    add_image_size('film_thumbs', 150, 150);
endif;

// add support widget -------------------------------
function wpb_widgets_init() {

    register_sidebar( array(
        'name' => __( 'right-sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'ناحیه قرار گیری ابزارک در سما راست', 'wpb' ),
        'before_widget' => '<div class="right-sidebar"><div>',
        'after_widget' => '</div></div>',
        'before_title' => '<h3><span>',
        'after_title' => '</span></h3>',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );



// import stylesheet and javascript files
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'myjquery', get_template_directory_uri() . '/assets/javascript/jquery.js', array (), 1.1, true);
    wp_enqueue_script( 'bpopup', get_template_directory_uri() . '/assets/javascript/bpopup.js', array (), 1.1, true);
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/assets/javascript/dropdown.js', array (), 1.1, true);
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/assets/javascript/lightbox.js', array (), 1.1, true);
    wp_enqueue_script( 'offmenu', get_template_directory_uri() . '/assets/javascript/off-menu.js', array (), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/javascript/script.js', array (), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// // Enable WP_DEBUG mode
// define('WP_DEBUG', true);
//
// // Enable Debug logging to the /wp-content/debug.log file
// define(‘WP_DEBUG_LOG’, true);
//
// // Disable display of errors and warnings
// define(‘WP_DEBUG_DISPLAY’, false);
// @ini_set(‘display_errors’,0);
//
// // Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
// define(‘SCRIPT_DEBUG’, true);
