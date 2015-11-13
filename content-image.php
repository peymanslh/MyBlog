<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
    <div class="post-title">
        <h2>
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link(__('Edit', 'myblog'), "<span class='edit-link'>", "</span>"); ?>
        </h2>

        <div class="post-info"><span><?php the_time(get_option('date_format')); ?> </span> /
            <span> <?php the_category(', '); ?></span> /
            <span> <?php comments_popup_link(__('No comment', 'myblog'), __('One comment', 'myblog'), __('% comment', 'myblog')); ?></span>
            / <span
                class="icon-camera"></span></div>
    </div>

    <div class="post-inner-content">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail('large');
        } else {
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/no-thumbnail.png" />';
        } ?>
        <?php the_content(__('More', 'myblog'), false); ?>
    </div>
</article>
