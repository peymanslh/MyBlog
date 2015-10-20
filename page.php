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
                style="background:url('<?php echo $url; ?>');-webkit-background-size: cover; -moz-background-size: cover; background-size: cover;">


        </header>

    <?php
    }
    ?>


    <section id="page-post">

    <div class="container">
    <div class="row">
    <section class="col-md-8 centered">

    <section class="my-post">

        <header>
            <h1>
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?>
            </h1>
        </header>

        <article>
            <?php the_content(); ?>
        </article>
    </section>

<?php endwhile;
else: ?>
    <h2>متاسفم, مطلبی ای که دنبالش میگردید یافت نشد.</h2>
<?php endif; ?>
    </section>
    </div>

<?php get_template_part('inc/share', 'page'); ?>
    </div>

</section>



<?php get_footer(); ?>
