<?php get_header();

if (have_posts()) : while (have_posts()) : the_post();

    $id = get_post_thumbnail_id();
    $thumbnail_size = 'full'; // or array(width, height);
    $thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);// the_post_thumbnail('thumbnail');
    $url = $thumbnail[0];
    $width = $thumbnail[1];
    $height = $thumbnail[2];


    if ($url == "") {
        get_template_part('layouts/header');
    } else { ?>
        <?php get_template_part('layouts/header'); ?>
        <header id="thumb-header"
                style="background:url('<?php echo $url; ?>');-webkit-background-size: cover; -moz-background-size: cover; background-size: cover;">
        </header>
    <?php
    }
    ?>

    <div id="page-post">

    <div class="container">
    <div class="row">
    <section class="col-md-8 centered">

    <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

        <div class="post-title">
            <h1>
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link(__('Edit', 'myblog'), "<span class='edit-link'>", "</span>"); ?>
            </h1>
        </div>

        <div class="post-inner-content">
            <?php the_content(); ?>
        </div>
    </article>

<?php endwhile;
else: ?>
    <h2><?php _e('Nothing found!','myblog'); ?></h2>
<?php endif; ?>
    </section>
    </div>

<?php get_template_part('inc/share', 'page'); ?>
    </div>

</div>



<?php get_footer(); ?>
