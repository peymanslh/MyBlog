<?php
/*
Template Name: About me
*/
?>

<?php get_header(); ?>
<?php get_template_part('inc/header'); ?>

    <section id="page-post">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>
            <div class="my-post">
                <div class="row">
                    <div class="col-md-8 centered">
                        <header>
                            <h1>
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?>
                            </h1>
                        </header>
                    </div>
                </div>

                <div class="row">
                    <section class="col-md-4 col-sm-6 col-md-offset-2">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                        } else {
                            echo '<img src="' . get_bloginfo('stylesheet_directory') . '/img/no-thumbnail.png" />';
                        } ?>
                    </section>
                    <article class="col-md-4 col-sm-6 about-tpl">
                        <?php the_content(); ?>

                        <?php endwhile; else: ?>
                            <h2>متاسفم, مطلبی ای که دنبالش میگردید یافت نشد.</h2>
                        <?php endif; ?>
                    </article>
                </div>
            </div>



            <?php get_template_part('inc/share', 'page'); ?>

        </div>
    </section>



<?php get_footer(); ?>
