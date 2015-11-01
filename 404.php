<?php get_header(); ?>


<?php get_template_part('layouts/header'); ?>


<section id="notfound">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-center">
                <h3><?php _e('Nothing found!', 'myblog'); ?></h3>
                <?php get_search_form(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1><?php _e('404', 'myblog'); ?></h1>
            </div>
        </div>

    </div>

</section>



<?php get_footer(); ?>
