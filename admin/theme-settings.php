<?php

add_action('init', 'propanel_of_options');

if (!function_exists('propanel_of_options')) {
    function propanel_of_options()
    {

//Theme Shortname
        $shortname = "mb";


//Populate the options array
        global $tt_options;
        $tt_options = get_option('of_options');


//Access the WordPress Pages via an Array
        $tt_pages = array();
        $tt_pages_obj = get_pages('sort_column=post_parent,menu_order');
        foreach ($tt_pages_obj as $tt_page) {
            $tt_pages[$tt_page->ID] = $tt_page->post_name;
        }
        $tt_pages_tmp = array_unshift($tt_pages, "Select a page:");


//Access the WordPress Categories via an Array
        $tt_categories = array();
        $tt_categories_obj = get_categories('hide_empty=0');
        foreach ($tt_categories_obj as $tt_cat) {
            $tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;
        }
        $categories_tmp = array_unshift($tt_categories, "Select a category:");


//Sample Array for demo purposes
        $sample_array = array("1", "2", "3", "4", "5");


//Sample Advanced Array - The actual value differs from what the user sees
        $sample_advanced_array = array("image" => "The Image", "post" => "The Post");


//Folder Paths for "type" => "images"
        $sampleurl = get_template_directory_uri() . '/admin/images/sample-layouts/';


        /*-----------------------------------------------------------------------------------*/
        /* Create The Custom Site Options Panel
        /*-----------------------------------------------------------------------------------*/
        $options = array(); // do not delete this line - sky will fall


        /* Option Page 1 - Header Options */
        $options[] = array("name" => __('1 -Header options', 'myblog'),
            "type" => "heading");

        $options[] = array("name" => __('Favorites icon', 'myblog'),
            "id" => $shortname . "_favicon",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => __('Apple touch icon', 'myblog'),
            "id" => $shortname . "_apple_icon",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => __(' Main title', 'myblog'),
            "id" => $shortname . "_head_h1",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Website logo', 'myblog'),
            "id" => $shortname . "_nav_logo",
            "std" => "",
            "type" => "upload");


        $options[] = array("name" => __('Background image', 'myblog'),
            "id" => $shortname . "_head_bg",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => __('Header image', 'myblog'),
            "id" => $shortname . "_head_logo",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => __('Is the image to be round?', 'myblog'),
            "id" => $shortname . "_head_logo_avatar_check",
            "std" => "true",
            "type" => "checkbox");

        $options[] = array("name" => __('Short Description', 'myblog'),
            "id" => $shortname . "_head_description",
            "std" => "",
            "type" => "textarea");

        $options[] = array("name" => __('Text color', 'myblog'),
            "id" => $shortname . "_head_txt_color",
            "std" => "#000000",
            "type" => "radio",
            "options" => array(
                '#000000' => __('Black', 'myblog'),
                '#ffffff' => __('White', 'myblog')
            ));


        /* Option Page 2 - Show Articles */
        $options[] = array("name" => __('2 - Show Articles', 'myblog'),
            "type" => "heading");

        $project_column_array = array(2, 3, 4, 6);

        $options[] = array("name" => __('Projects archive', 'myblog'),
            "desc" => __('Count of project to show', 'myblog'),
            "id" => $shortname . "_project_column",
            "std" => "2",
            "type" => "select",
            "options" => $project_column_array);

        $options[] = array("name" => __('Theme color', 'myblog'),
            "desc" => __('Select your theme color', 'myblog'),
            "id" => $shortname . "_theme_color",
            "std" => "main",
            "type" => "images",
            "options" => array(
                'main' => $sampleurl . 'main.png',
                'blue' => $sampleurl . 'blue.png',
                'green' => $sampleurl . 'green.png',
                'orange' => $sampleurl . 'orange.png',
                'flamingo' => $sampleurl . 'flamingo.png',
                'magenta' => $sampleurl . 'magenta.png'
            ));


        /* Option Page 3 - social networks */
        $options[] = array("name" => __('3 - Social networks', 'myblog'),
            "type" => "heading");

        $options[] = array("name" => __('Show on footer?', 'myblog'),
            "id" => $shortname . "_foot_social_check",
            "std" => "true",
            "type" => "checkbox");


        $options[] = array("name" => __('Google', 'myblog'),
            "id" => $shortname . "_google",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Facebook', 'myblog'),
            "id" => $shortname . "_facebook",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Instagram', 'myblog'),
            "id" => $shortname . "_instagram",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Twitter', 'myblog'),
            "id" => $shortname . "_twitter",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Feed', 'myblog'),
            "id" => $shortname . "_feed",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Youtube', 'myblog'),
            "id" => $shortname . "_youtube",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Flicker', 'myblog'),
            "id" => $shortname . "_flickr",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Github', 'myblog'),
            "id" => $shortname . "_github",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Linkedin', 'myblog'),
            "id" => $shortname . "_linkedin",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Stackoverflow', 'myblog'),
            "id" => $shortname . "_stackoverflow",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Pinterest', 'myblog'),
            "id" => $shortname . "_pinterest",
            "std" => "",
            "type" => "text");


        /* Option Page 4 - Footer footer */
        $options[] = array("name" => __('4 - Footer options', 'myblog'),
            "type" => "heading");


        $options[] = array("name" => __('Copyright text', 'myblog'),
            "id" => $shortname . "_copyright_txt",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Custom CSS style', 'myblog'),
            "id" => $shortname . "_footer_style",
            "std" => "",
            "type" => "textarea");

        $options[] = array("name" => __('Custom script', 'myblog'),
            "id" => $shortname . "_footer_script",
            "std" => "",
            "type" => "textarea");


        update_option('of_template', $options);
        update_option('of_shortname', $shortname);

    }
}
