<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

    <div class="post-inner-content">
        <?php the_content(__('More', 'myblog'), false); ?>
    </div>

    <div class="post-title">
        <?php edit_post_link(__('Edit', 'myblog'), "<span class='edit-link'>", "</span>"); ?>
        <div class="post-info"><span><?php the_time("j F Y"); ?> </span> / <span> <?php the_category(', '); ?></span> /
            <span> <?php comments_popup_link(__('No comment', 'myblog'), __('One comment', 'myblog'), __('% comment', 'myblog')); ?></span>
            / <span
                class="icon-file-text"></span></div>
    </div>

</article>
