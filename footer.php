<?php get_sidebar(); ?>

<?php
global $data;
$footer_style = $data['footer_style'];
$footer_script = $data['footer_script'];
$copyright_txt = $data['copyright_txt'];
$foot_social_check = $data['foot_social_check'];
?>

<footer id="footer">
    <div class="container">

        <div class="row bt-footer">
            <div class="col-md-6">
                <div class="copyright"><?php echo $copyright_txt ?></div>
                <p class="designer"><?php _e('Made with', 'myblog'); ?> <span
                        class="icon-heart"></span> <?php _e('by', 'myblog'); ?> <a
                        href="<?php echo esc_url('http://peymansalehi.net/'); ?>"
                        target="_blank"><?php _e('@peymanslh,', 'myblog'); ?></a> <?php _e('Powered by', 'myblog'); ?>
                    <a href="<?php echo esc_url('https://wordpress.org/'); ?>"
                       target="_blank"><?php _e('Wordpress', 'myblog'); ?></a></p>
            </div>

            <div class="col-md-6">
                <div class="social-box">
                    <?php
                      if ($foot_social_check == 1) {
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
    <?php echo $footer_script; ?>
</script>

<?php wp_footer(); ?>
</body>
</html>
