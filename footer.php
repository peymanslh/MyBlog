<?php get_template_part('inc/sidebar'); ?>

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

                <p class="designer">طراحی شده با <span class="icon-heart"></span> توسط <a href="http://peymansalehi.net" target="_blank">peymanslh@</a>
                </p>
            </div>

            <div class="col-md-6">
                <div class="social-box">
                    <?php
                    $foot_social_check = get_option('mb_foot_social_check');

                    if ($foot_social_check == 'true') {
                        my_social();
                    } else {
                        echo "";
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</footer>

<div>
<style type="text/css" scoped>
    <?php echo $footer_style ;?>
</style>
</div>

<script type="text/javascript">
    <?php echo $footer_script ;?>
</script>

<?php wp_footer(); ?>
</body>
</html>
