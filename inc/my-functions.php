<?php
function my_social()
{
    $social = array(
        'google' => get_option('mb_google'),
        'facebook' => get_option('mb_facebook'),
        'instagram' => get_option('mb_instagram'),
        'twitter' => get_option('mb_twitter'),
        'feed' => get_option('mb_feed'),
        'youtube' => get_option('mb_youtube'),
        'flickr' => get_option('mb_flickr'),
        'github' => get_option('mb_github'),
        'linkedin' => get_option('mb_linkedin'),
        'stackoverflow' => get_option('mb_stackoverflow'),
        'pinterest' => get_option('mb_pinterest')
    );

    foreach ($social as $value => $key) {

        if ($key !== "") {
            echo "<a href='", $key, "' target='_blank'><span class='icon-$value'></span></a> ";
        } else {
            echo "";
        }
    }
}