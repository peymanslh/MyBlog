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


        /* Option Page 1 - All Options */
        $options[] = array("name" => __('1 - هدر سایت', 'framework_localize'),
            "type" => "heading");

        $options[] = array("name" => __('Favorites icon', 'framework_localize'),
            "desc" => __('در کنار تب و یا آدرس وبسایت در مرورگر نمایش داده می شود.', 'framework_localize'),
            "id" => $shortname . "_favicon",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => __('Apple touch icon', 'framework_localize'),
            "desc" => __('برای نمایش آیکون سایت شما در دیوایس های اپل.', 'framework_localize'),
            "id" => $shortname . "_apple_icon",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => __('عنوان اصلی', 'framework_localize'),
            "desc" => "عنوانی چند کلمه ای برای هدر.",
            "id" => $shortname . "_head_h1",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('لوگوی سایت', 'framework_localize'),
            "desc" => __(' لوگوی سایت برای هدر', 'framework_localize'),
            "id" => $shortname . "_nav_logo",
            "std" => "",
            "type" => "upload");


        $options[] = array("name" => __('عکس پس زمینه', 'framework_localize'),
            "desc" => __('عکس پس زمینه برای صفحه اول را میتوانید در این قسمت آپلود کنید.', 'framework_localize'),
            "id" => $shortname . "_head_bg",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => __('عکس قسمت توضیحات', 'framework_localize'),
            "desc" => __('میتوانید لوگو و یا آواتار خود را در این قسمت آپلود کنید.', 'framework_localize'),
            "id" => $shortname . "_head_logo",
            "std" => "",
            "type" => "upload");

        $options[] = array("name" => __('گرد کردن عکس', 'framework_localize'),
            "desc" => __('آیا عکسی که آپلود کرده اید آواتار است؟', 'framework_localize'),
            "id" => $shortname . "_head_logo_avatar_check",
            "std" => "true",
            "type" => "checkbox");

        $options[] = array("name" => __('رنگ متن توضیحات', 'framework_localize'),
            "desc" => __('این رنگ شامل رنگ عنوان، توضیح و رنگ آیکون های هدر می شود.', 'framework_localize'),
            "id" => $shortname . "_head_txt_color",
            "std" => "#000000",
            "type" => "radio",
            "options" => array(
                '#000000' => 'سیاه',
                '#ffffff' => 'سفید'
            ));

        $options[] = array("name" => __('توضیح کوتاه', 'framework_localize'),
            "desc" => "زیر عکس قرار میگیرد",
            "id" => $shortname . "_head_description",
            "std" => "",
            "type" => "textarea");


        /* Option Page 2 - main Options */
        $options[] = array("name" => __('2 - نمایش مطالب', 'framework_localize'),
            "type" => "heading");

        $project_column_array = array(2, 3, 4, 6);

        $options[] = array("name" => __('آرشیو پروژه ها', 'framework_localize'),
            "desc" => __('تعداد ستون برای نمایش مطالب در ارشیو پروژه ها را مشخص کنید.', 'framework_localize'),
            "id" => $shortname . "_project_column",
            "std" => "2",
            "type" => "select",
            "options" => $project_column_array);

        $options[] = array("name" => __('رنگ قالب', 'framework_localize'),
            "desc" => __('رنگ اصلی قالب را انتخاب کنید.', 'framework_localize'),
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


        /* Option Page 3 - social pages */
        $options[] = array("name" => __('3 - شبکه های اجتماعی', 'framework_localize'),
            "type" => "heading");

        $options[] = array("name" => __('نمایش در فوتر', 'framework_localize'),
            "desc" => __('آیا آیکون شبکه های اجتماعی در فوتر نمایش داده شود؟', 'framework_localize'),
            "id" => $shortname . "_foot_social_check",
            "std" => "true",
            "type" => "checkbox");


        $options[] = array("name" => __('Google', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_google",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Facebook', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_facebook",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Instagram', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_instagram",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Twitter', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_twitter",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Feed', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_feed",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Youtube', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_youtube",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Flicker', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_flickr",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Github', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_github",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Linkedin', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_linkedin",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Stackoverflow', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_stackoverflow",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('Pinterest', 'framework_localize'),
            "desc" => "برای عدم نمایش فیلد را خالی بگذارید.",
            "id" => $shortname . "_pinterest",
            "std" => "",
            "type" => "text");


        /* Option Page 4 - site footer */
        $options[] = array("name" => __('4 - فوتر سایت', 'framework_localize'),
            "type" => "heading");


        $options[] = array("name" => __('متن کپی رایت', 'framework_localize'),
            "desc" => "متن کپی رایت برای پایین سایت.",
            "id" => $shortname . "_copyright_txt",
            "std" => "",
            "type" => "text");

        $options[] = array("name" => __('استایل های شما', 'framework_localize'),
            "desc" => "می توانید استایل دلخواه خود را اینجا قرار دهدی.",
            "id" => $shortname . "_footer_style",
            "std" => "",
            "type" => "textarea");

        $options[] = array("name" => __('اسکریپت های شما', 'framework_localize'),
            "desc" => "می توانید اسکریپت دلخواه خود را اینجا قرار دهدی.",
            "id" => $shortname . "_footer_script",
            "std" => "",
            "type" => "textarea");


        update_option('of_template', $options);
        update_option('of_shortname', $shortname);

    }
}
