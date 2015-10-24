<?php get_sidebar(); ?>

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

                <p class="designer"><?php _e('Made with', 'myblog'); ?> <span
                        class="icon-heart"></span> <?php _e('by', 'myblog'); ?> <a href="http://peymansalehi.net/"
                                                                                   target="_blank"><?php _e('@peymanslh', 'myblog'); ?></a>
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
