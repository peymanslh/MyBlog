<?php
function myblog_custom_header_setup()
{
    $args = array(
        'default-image' => '',
        'default-text-color' => 'e9e0e1',
        'width' => 1280,
        'height' => 390,
        'flex-height' => true,
        'wp-head-callback' => 'myblog_header_style',
        'admin-head-callback' => 'myblog_admin_header_style',
        'admin-preview-callback' => 'myblog_admin_header_image',
    );
    $args = apply_filters('myblog_custom_header_args', $args);
    add_theme_support('custom-header', $args);
}
add_action('after_setup_theme', 'myblog_custom_header_setup');
if (!function_exists('get_custom_header')) {
    function get_custom_header()
    {
        return (object)array(
            'url' => get_header_image(),
            'thumbnail_url' => get_header_image(),
            'width' => HEADER_IMAGE_WIDTH,
            'height' => HEADER_IMAGE_HEIGHT,
        );
    }
}
if (!function_exists('myblo_header_style')) :
    /**
     * Styles the header image and text displayed on the blog
     *
     *
     */
    function myblog_header_style()
    {
        // If no custom options for text are set, let's bail
        // get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
        if (HEADER_TEXTCOLOR == get_header_textcolor() && '' == get_header_image())
            return;
        // If we get this far, we have custom styles. Let's do this.
        ?>
        <style type="text/css">
            <?php
                // Do we have a custom header image?
                if ( '' != get_header_image() ) :
            endif;

                // Has the text been hidden?
                if ( 'blank' == get_header_textcolor() ) :
                else :
            endif; ?>
        </style>
    <?php
    }
endif; // myblog_header_style
if (!function_exists('myblog_admin_header_style')) :
    /**
     * Styles the header image displayed on the Appearance > Header admin panel.
     *
     */
    function myblog_admin_header_style()
    {
        ?>
        <style type="text/css">
            .appearance_page_custom-header #headimg {
                /* This is the container for the Custom Header preview. */
                background: #33605a;
                border: none;
                min-height: 0 !important
            }

            #headimg h1 {
                /* This is the site title displayed in the preview */
                font-size: 45px;
                font-family: Georgia, 'Times New Roman', serif;
                font-style: italic;
                font-weight: normal;
                padding: 0.8em 0.5em 0;
            }

            #desc {
                /* This is the site description (tagline) displayed in the preview */
                padding: 0 2em 2em;
            }

            #headimg h1 a,
            #desc {
                color: #e9e0d1;
                text-decoration: none;
            }
        </style>
    <?php
    }
endif;

if (!function_exists('myblog_admin_header_image')) :
    /**
     * Custom header image markup displayed on the Appearance > Header admin panel.
     *
     */
    function myblog_admin_header_image()
    { ?>
        <div id="headimg">
            <?php
            if ('blank' == get_header_textcolor() || '' == get_header_textcolor())
                $style = ' style="display:none;"';
            else
                $style = ' style="color:#' . get_header_textcolor() . ';"';
            ?>
            <h1><a id="name"<?php echo $style; ?> onclick="return false;"
                   href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>

            <div id="desc"<?php echo $style; ?>><?php bloginfo('description'); ?></div>
            <?php $header_image = get_header_image();
            if (!empty($header_image)) : ?>
                <img src="<?php echo esc_url($header_image); ?>" alt=""/>
            <?php endif; ?>
        </div>
    <?php }
endif; // myblog_admin_header_image
