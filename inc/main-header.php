<?php
$head_txt_color = get_option('mb_head_txt_color');

$head_bg = get_option('mb_head_bg');
//admin setting var
$head_logo = get_option('mb_head_logo');
$head_logo_avatar_check = get_option('mb_head_logo_avatar_check');
$head_description = get_option('mb_head_description');
?>

<?php
if ($head_description == "" && $head_logo == "") {
    include('second-header.php');
} else {
?>


<?php if ($head_bg != "") { ?>
<div id="header" style='background:<?php echo "url(", $head_bg, ")"; ?>;'>

    <?php }else{ ?>

    <div id="header">
        <?php } ?>

        <?php include('second-header.php'); ?>
        <div class="container">
            <!-- navbar here -->

            <?php
            if ($head_logo_avatar_check == "true") {
                $yesorno = ' avatar';
            } else {
                $yesorno = '';
            } ?>


            <?php if ($head_logo == "") { ?>

                <div class="no-logo"></div>

            <?php } else { ?>

                <img class="main-head-logo<?php echo $yesorno ?>" src="<?php echo $head_logo ?>" alt="<?php bloginfo() ?>"/>

            <?php } ?>

            <div class="row">
                <div class="col-md-4 col-sm-7 col-xs-10 centered">
                    <p style="color:<?php echo $head_txt_color ?>"><?php echo $head_description ?></p>
                </div>
            </div>

        </div>
    </div>

    <?php } ?>
