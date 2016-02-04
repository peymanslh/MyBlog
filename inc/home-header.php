<?php
// Theme option var
global $data;
// $head_txt_color = get_option('mb_head_txt_color');
// $head_bg = get_option('mb_head_bg');
$head_logo = $data['head_logo'];
$head_logo_avatar_check = $data['head_logo_avatar_check'];
$head_description = $data['head_description'];
// worpdress header image
$header_image = get_header_image();

// Build header - layouts/header.php
function get_header_home(){

    // global variable
    global $head_logo;
    global $head_logo_avatar_check;
    global $head_description;
    global $header_image;
    ?>
    <div id="home-header">
        <div class="container p-tb-40">
            <?php
            if ($head_logo_avatar_check == 1) {
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
// Export custom css style
add_action('wp_head', 'home_header_styles', 100);
function home_header_styles(){
    global $head_logo;
    global $head_description;
    global $header_image;
    ?>
    <style>
      #home-header {
            background: url('<?php echo $header_image; ?>') center top no-repeat;
            min-height: 390px;
      }
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
             min-height: 390px;
             min-height: 0 !important;
             background: url('<?php echo $header_image; ?>') center top no-repeat;
        }
        .p-tb-40 {
             padding: 0 !important;
        }
        <?php }
            }
        } ?>
    </style>
<?php } ?>
