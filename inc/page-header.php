<?php
    $head_txt_color = get_option('mb_head_txt_color');

?>


<header id="page-header" style='color: <?= $head_txt_color ?>;'>

<?php include ('navbar.php'); ?>
<header id="page-header-content">
    
    <div class="container">

    	<?php

                //admin setting var
                $head_logo = get_option('mb_head_logo');
                $head_logo_avatar_check = get_option('mb_head_logo_avatar_check');
                $head_h1 = get_option('mb_head_h1');
                $head_description = get_option('mb_head_description');
        ?>

            <?php
                if ($head_logo_avatar_check == "true") {
                        $yesorno = 'avatar';
                } else {
                        $yesorno = '';
                }
            ?>

    <div class="row">
        <div class="col-md-2">
            <?php
                if($head_logo == "") {
                        echo "<div class='no-logo'></div>";
                } else {
                        echo "<img class='", $yesorno ," ' src='", $head_logo ,"' alt='", bloginfo() ,"'/>";
                }
            ?>
        </div>
        <div class="col-md-5">
            <?php
                if ($head_h1 == "") {
                        echo "";
                } else {
                        echo "<h1>", $head_h1 , "</h1>";
                }
            ?>
        </div>

        <div class="col-md-5">
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

    </div><!--end row -->
		
    </div>
    </header>
</header>