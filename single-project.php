<?php get_header();

if (have_posts()) : while (have_posts()) :
the_post();

$id = get_post_thumbnail_id();
$thumbnail_size = 'full'; // or array(width, height);
$thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);// the_post_thumbnail('thumbnail');
$url = $thumbnail[0];
$width = $thumbnail[1];
$height = $thumbnail[2];


get_template_part('layouts/header'); ?>

<section id="single-post">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-center">


                <article id="project-<?php the_ID(); ?>"  <?php post_class(); ?>>

                    <div class="post-title">
                        <h2>
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link(__('Edit', 'myblog'), "<span class='edit-link'>", "</span>"); ?>
                        </h2>

                    </div>

                    <div class="post-inner-content">
                        <?php the_content(); ?>
                    </div>

                </article>


                <?php endwhile;
                else: ?>
                    <h2><?php _e('Nothing found!', 'myblog'); ?></h2>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 col-md-offset-2">
                <?php get_template_part('layouts/share', 'single'); ?>
            </div>
            <div class="col-md-4">
                <div class="next-prev">
                    <?php _e('Post', 'myblog'); ?> <?php previous_post_link('%link', __('Previous', 'myblog'), TRUE); ?>
                    / <?php next_post_link('%link', __('Next', 'myblog'), TRUE); ?>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-8 col-center">
                <div class="tags">
                    <span class='title'><?php _e('Tags:', 'myblog'); ?></span><?php the_tags("", " , ", ""); ?>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-8 col-center">
                <?php comments_template('', true); ?>
            </div>
        </div>


    </div>

</section>



<?php get_footer(); ?>
