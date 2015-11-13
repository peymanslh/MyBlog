<?php
// Comment template
get_template_part('inc/template-tags');

// Other files -------------------------------
require_once(TEMPLATEPATH . '/inc/my-functions.php');

// project post type -------------------------------
require_once(TEMPLATEPATH . '/inc/posttype-taxonomy.php');

// Change gallery output
require_once(TEMPLATEPATH . '/inc/gallery.php');

//admin panel -------------------------------
require_once(TEMPLATEPATH . '/admin/admin-functions.php');
require_once(TEMPLATEPATH . '/admin/admin-interface.php');
require_once(TEMPLATEPATH . '/admin/theme-settings.php');

/**
 * Implement the Custom Header feature.
 *
 */
require_once(TEMPLATEPATH . '/inc/custom-header.php');
require_once(TEMPLATEPATH . '/inc/home-header.php');

//Load theme text domain
load_theme_textdomain('myblog', get_template_directory() . '/language');


//add navbar -------------------------------
register_nav_menu('top_menu', __('Main menu', 'myblog'));

// Content width
if (!isset($content_width)) {
    $content_width = 726;
}

// add page break button to wysiwyg_editor
add_filter('mce_buttons', 'wysiwyg_editor');

function wysiwyg_editor($mce_buttons)
{
    $pos = array_search('wp_more', $mce_buttons, true);
    if ($pos !== false) {
        $tmp_buttons = array_slice($mce_buttons, 0, $pos + 1);
        $tmp_buttons[] = 'wp_page';
        $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons, $pos + 1));
    }
    return $mce_buttons;
}

/**
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
function theme_slug_setup()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_slug_setup');

if (!function_exists('_wp_render_title_tag')) :
    function theme_slug_render_title()
    {
        echo "<title>" . wp_title('|', true, 'right') . "</title>";
    }

    add_action('wp_head', 'theme_slug_render_title');
endif;

/**
 * Add default posts and comments RSS feed links to head
 */
add_theme_support('automatic-feed-links');

// add support title
add_theme_support("title-tag");

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
function myblog_widgets_init()
{

    register_sidebar(array(
        'name' => __('right-sidebar', 'myblog'),
        'id' => 'sidebar-1',
        'description' => __('Right Sidebar', 'myblog'),
        'before_widget' => '<div class="right-sidebar"><div>',
        'after_widget' => '</div></div>',
        'before_title' => '<h3><span>',
        'after_title' => '</span></h3>',
    ));
}

add_action('widgets_init', 'myblog_widgets_init');


// import stylesheet and javascript files
function add_theme_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    $css = '.main-head-title{color: red !important;}';
    if (!empty($css))
        wp_add_inline_style('custom-css', $css);
    wp_enqueue_script('myjquery', get_template_directory_uri() . '/assets/javascript/jquery.js', array(), 1.1, true);
    wp_enqueue_script('bpopup', get_template_directory_uri() . '/assets/javascript/bpopup.js', array(), 1.1, true);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/assets/javascript/dropdown.js', array(), 1.1, true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/javascript/lightbox.js', array(), 1.1, true);
    wp_enqueue_script('offmenu', get_template_directory_uri() . '/assets/javascript/off-menu.js', array(), 1.1, true);
    wp_enqueue_script('slider', get_template_directory_uri() . '/assets/javascript/responsiveslides.js', array(), 1.1, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/javascript/script.js', array(), 1.1, true);

}

add_action('wp_enqueue_scripts', 'add_theme_scripts');


add_action('init', 'cd_add_editor_styles');
/**
 * Apply theme's stylesheet to the visual editor.
 *
 * @uses add_editor_style() Links a stylesheet to visual editor
 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
 */
function cd_add_editor_styles()
{
    add_editor_style(esc_url(get_template_directory_uri()) . '/assets/css/main.css');
}
