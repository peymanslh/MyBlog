<?php get_header();

if (have_posts()) : while (have_posts()) : the_post();

    $id = get_post_thumbnail_id();
    $thumbnail_size = 'full'; // or array(width, height);
    $thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);// the_post_thumbnail('thumbnail');
    $url = $thumbnail[0];
    $width = $thumbnail[1];
    $height = $thumbnail[2];


    get_template_part('inc/header'); ?>

    <section id="single-post">

    <div class="container">
    <div class="row">
    <div class="col-md-8 centered">


    <article id="project-<?php the_ID(); ?>"  <?php post_class(); ?>>

        <div class="post-title">
            <h1>
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?>
            </h1>

        </div>

        <div class="post-inner-content">
            <?php the_content(); ?>
        </div>

    </article>


<?php endwhile;
else: ?>
    <h2>متاسفم, مطلبی ای که دنبالش میگردید یافت نشد.</h2>
<?php endif; ?>
    </div>
    </div>

    <div class="row">

        <div class="col-md-4 col-md-offset-2">
            <?php get_template_part('inc/share', 'single'); ?>
        </div>
        <div class="col-md-4">
            <div class="next-prev">
                مطلب <?php previous_post(' %', 'قبلی', 'no'); ?> / <?php next_post('%', 'بعدی', 'no'); ?>
            </div>
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
