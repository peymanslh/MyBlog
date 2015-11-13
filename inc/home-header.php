<?php
$head_txt_color = get_option('mb_head_txt_color');
$head_bg = get_option('mb_head_bg');
$head_logo = get_option('mb_head_logo');
$head_logo_avatar_check = get_option('mb_head_logo_avatar_check');
$head_description = get_option('mb_head_description');
$header_image = get_header_image();
?>
<?php
function get_header_home(){
    global $head_logo;
    global $head_logo_avatar_check;
    global $head_description;
    global $header_image;
    ?>
    <div id="home-header">
        <?php if (!empty($header_image)) { ?>
            <img class="bg-image" src="<?php header_image();?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display'));?>"/>
        <?php } ?>
        <div class="container p-tb-40">
            <?php
            if ($head_logo_avatar_check == "true") {
                $yesorno = ' avatar';
            } else {
                $yesorno = '';
            } ?>
            <?php if (!empty($head_logo)) { ?>
                <img class="main-head-logo<?php echo $yesorno ?>" src="<?php echo $head_logo ?>" alt="<?php bloginfo() ?>"/>
            <?php } ?>
            <?php if (!empty($head_description)) { ?>
                <h2 class="main-head-title"><?php echo $head_description ?></h2>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<?php
add_action('wp_head', 'home_header_styles', 100);
function home_header_styles(){
    global $head_logo;
    global $head_description;
    global $header_image;
    ?>
    <style>
        .main-head-title {
            color: #<?php header_textcolor();?> !important;
        }
        <?php if( empty( $head_logo )) { ?>
        .main-head-title {
            margin-top: 120px !important;
        }
        <?php } ?>
        <?php if(! empty( $head_description )) { ?>
        .main-head-logo.avatar {
            margin-top: 50px !important;
        }
        <?php } ?>
        <?php if(! $head_logo ) {
        if(! $head_description ) {
        if(! $header_image ) { ?>
        #home-header {
            min-height: 0 !important;
        }
        .p-tb-40 {
            padding: 0 !important;
        }
        <?php }
            }
        } ?>
    </style>
<?php } ?>