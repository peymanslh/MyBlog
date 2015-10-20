<?php get_header();

if (have_posts()) : while (have_posts()) : the_post();

    $id = get_post_thumbnail_id();
    $thumbnail_size = 'full'; // or array(width, height);
    $thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);// the_post_thumbnail('thumbnail');
    $url = $thumbnail[0];
    $width = $thumbnail[1];
    $height = $thumbnail[2];


    if ($url == "") {
        get_template_part('inc/header');
    } else { ?>
        <?php get_template_part('inc/header'); ?>
        <header id="thumb-header"
                style="background:url('<?php echo $url; ?>') center fixed;-webkit-background-size: cover; -moz-background-size: cover; background-size: cover;">


        </header>

    <?php
    }
    ?>

    <section id="single-post">

    <div class="container">
    <div class="row">
    <section class="col-md-8 centered">


    <?php get_template_part('content', get_post_format()); ?>

<?php endwhile;
else: ?>
    <h2>متاسفم, مطلبی ای که دنبالش میگردید یافت نشد.</h2>
<?php endif; ?>
    </section>
    </div>

    <div class="row">

        <div class="col-md-4 col-md-offset-2">
            <?php get_template_part('inc/share', 'single'); ?>
        </div>
        <div class="col-md-4">
            <section class="next-prev">
                مطلب <?php previous_post(' %', 'قبلی', 'no'); ?> / <?php next_post('%', 'بعدی', 'no'); ?>
            </section>
        </div>
    </div>
    <div class="row">

        <div class="col-md-8 centered">
            <div class="tags">
                <?php the_tags("<span class='title'>کلمات کلیدی :</span> ", " , ", ""); ?>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-md-8 centered">
            <?php comments_template('', true); ?>
        </div>
    </div>


    </div>

</section>



<?php get_footer(); ?>
