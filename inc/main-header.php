<?php
    $head_txt_color = get_option('mb_head_txt_color');

    $head_bg = get_option('mb_head_bg');
    if ($head_bg != "") {
?>



<header id="header" style='background: #F6F6F6 <?php echo "url(", $head_bg, ")";?>;color: <?= $head_txt_color ?>;'>

    <?php }else{  ?>

    <header id="header" style='background: #F6F6F6;color: <?= $head_txt_color ?>;'>
<?php } ?>

<?php include ('navbar.php'); ?>
    <div class="container">
        <!-- navbar here -->

        <?php

                //admin setting var
                $head_logo = get_option('mb_head_logo');
                $head_logo_avatar_check = get_option('mb_head_logo_avatar_check');
                $head_h1 = get_option('mb_head_h1');
                $head_description = get_option('mb_head_description');


                if ($head_logo_avatar_check == "true") {
                        $yesorno = ' avatar';
                } else {
                        $yesorno = '';
                }


                if($head_logo == "") {
                        echo "<div class='no-logo'></div>";
                } else {
                        echo "<img class='", $yesorno ," ' src='", $head_logo ,"' alt='", bloginfo() ,"'/>";
                }


                if ($head_h1 == "") {
                        echo "";
                } else {
                        echo "<h1>", $head_h1 , "</h1> <div class='head-h-bottom' style='background-color:", $head_txt_color_d, ";'></div>";
                }

        ?>


        <h6><?= $head_description ?></h6>


        <section class="social-box">


                <?php
                $head_social_check = get_option('mb_head_social_check');

                if($head_social_check == "true") {
                    get_social();
                } else {
                    echo "";
                }

                ?>
        </section>
    </div>
</header>
