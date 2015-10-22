<?php
/*
Template Name: About me
*/
?>

<?php get_header(); ?>
<?php get_template_part('inc/header'); ?>

    <div id="page-post">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>
            <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
                <div class="row">
                    <div class="col-md-8 centered">
                        <div class="post-title">
                            <h1>
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link(__('Edit', 'myblog'), "<span class='edit-link'>", "</span>"); ?>
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="about-tpl-thumb-pic col-md-4 col-sm-6 col-md-offset-2">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                        } else {
                            echo '<img src="' . get_bloginfo('stylesheet_directory') . '/img/no-thumbnail.png" />';
                        } ?>
                    </div>
                    <div class="post-inner-content col-md-4 col-sm-6 about-tpl">
                        <?php the_content(); ?>

                        <?php endwhile; else: ?>
                            <h2><?php _e('Nothing found!','myblog'); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </article>

            <?php get_template_part('inc/share', 'page'); ?>

        </div>
    </div>


<?php get_footer(); ?>
