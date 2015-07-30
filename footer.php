<?php include ('inc/off-canvas.php'); ?>

<footer id="footer">
    <div class="container">

        <div class="row bt-footer">

             <div class="col-md-6">
                <?php $copyright_txt = get_option('mb_copyright_txt'); ?>
                <div class="copyright"><?= $copyright_txt ?></div>

                <p class="designer">طراحی شده با <span class="icon-heart"></span> توسط <a href="http://peymansalehi.ir" target="_blank">PEYMANSLH@</a></p>
            </div>

            <div class="col-md-6">
                <section class="social-box">
                    <?php
                        $foot_social_check = get_option('mb_foot_social_check');


                        if ($foot_social_check == 'true') {
                            get_social();
                        } else {
                            echo "";
                        }
                    ?>
                </section>
            </div>

        </div>
    </div>
</footer>

<script type="text/javascript" src="<?= esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?= esc_url( get_template_directory_uri() ); ?>/js/bpopup.js"></script>
<script type="text/javascript" src="<?= esc_url( get_template_directory_uri() ); ?>/js/dropdown.js"></script>
<script type="text/javascript" src="<?= esc_url( get_template_directory_uri() ); ?>/js/lightbox.js"></script>
<script type="text/javascript" src="<?= esc_url( get_template_directory_uri() ); ?>/js/off-menu.js"></script>
<script type="text/javascript" src="<?= esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>