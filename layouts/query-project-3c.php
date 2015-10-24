<div class="row">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <div class="col-md-4 col-sm-6 project-thumb">
                <a href="<?php the_permalink() ?>">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('project_thumb');
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/no-thumbnail.png" />';
                    } ?>

                    <div class="overaly"></div>
                    <div class="title"><span><?php the_title(); ?></span></div>
                </a>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
