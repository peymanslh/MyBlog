<?php include('inc/off-canvas.php'); ?>

<?php
$copyright_txt = get_option('mb_copyright_txt');
$footer_style = get_option('mb_footer_style');
$footer_script = get_option('mb_footer_script');
?>

<footer id="footer">
    <div class="container">

        <div class="row bt-footer">

            <div class="col-md-6">

                <div class="copyright"><?php echo $copyright_txt ?></div>

                <p class="designer">طراحی شده با <span class="icon-heart"></span> توسط <a href="http://peymansalehi.net"
                                                                                          target="_blank">peymanslh@</a>
                </p>
            </div>

            <div class="col-md-6">
                <section class="social-box">
                    <?php
                    $foot_social_check = get_option('mb_foot_social_check');


                    if ($foot_social_check == 'true') {
                        my_social();
                    } else {
                        echo "";
                    }
                    ?>
                </section>
            </div>

        </div>
    </div>
</footer>

<style type="text/css">
    <?php echo $footer_style ;?>
</style>


<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bpopup.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/dropdown.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/lightbox.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/off-menu.js"></script>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/script.js"></script>

<script type="text/javascript">
    <?php echo $footer_script ;?>
</script>

<?php wp_footer(); ?>
</body>
</html>
