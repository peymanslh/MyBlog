<div id="home-post-one">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-center">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('content', get_post_format()); ?>

                    <?php endwhile; ?>
                <?php endif; ?>
                <?php
                the_posts_pagination(array(
                    'prev_text' => __('Previous page', 'myblog'),
                    'next_text' => __('Next page', 'myblog'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'myblog') . ' </span>',
                ));
                ?>
            </div>
        </div>
    </div>
</div>
