<?php get_header();

if (have_posts()) : while (have_posts()) :
the_post();

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
            style="background:url('<?php echo $url; ?>') center fixed;-webkit-background-size: cover; -moz-background-size: cover; background-size: cover;">


    </header>

<?php
}
?>

<section id="single-post">

    <div class="container">
        <div class="row">
            <section class="col-md-8 col-center">

                <?php get_template_part('content', get_post_format()); ?>

                <?php endwhile;
                else: ?>
                    <h2><?php _e('Nothing found!', 'myblog'); ?></h2>
                <?php endif; ?>
            </section>
        </div>

            <?php
            $defaults = array(
                'before'           => '<div class="single-nav-links">'. '<span class="text">'  . __( 'Continue this article:', 'myblog' ) . '</span>',
                'after'            => '</div>',
                'link_before'      => '',
                'link_after'       => '',
                'next_or_number'   => 'number',
                'separator'        => ' ',
                'nextpagelink'     => __( 'Next page', 'myblog' ),
                'previouspagelink' => __( 'Previous page', 'myblog' ),
                'pagelink'         => '%',
                'echo'             => 1
            );
            wp_link_pages( $defaults );
            ?>
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <?php get_template_part('layouts/share', 'single'); ?>
            </div>
            <div class="col-md-4">
                <section class="next-prev">
                    <?php _e('Post', 'myblog'); ?> <?php previous_post_link('%link', __('Previous', 'myblog'), TRUE); ?>
                    / <?php next_post_link('%link', __('Next', 'myblog'), TRUE); ?>
                </section>
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
