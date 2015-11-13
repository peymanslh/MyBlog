<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

    <div class="post-title">
        <h2><a href="<?php $content = get_the_content();
            echo $content ?>"><span class="icon-link"></span> <?php the_title(); ?>
            </a><?php edit_post_link(__('Edit', 'myblog'), "<span class='edit-link'>", "</span>"); ?></h2>

        <div class="post-info"><span><?php the_time(get_option('date_format')); ?> </span> /
            <span> <?php the_category(', '); ?></span> /
            <span> <?php comments_popup_link(__('No comment', 'myblog'), __('One comment', 'myblog'), __('% comment', 'myblog')); ?></span>
            /<span
                class="icon-link"></span></div>
    </div>

</article>
