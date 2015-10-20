<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

    <div class="post-inner-content">
        <?php the_content('ادامه', false); ?>
    </div>

    <div class="post-title">
        <?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?>
        <div class="post-info"><span><?php the_time("j F Y"); ?> </span> / <span> <?php the_category(', '); ?></span> / <span> <?php comments_popup_link( __('بدون دیدگاه', 'max-mag'), __( '1 دیدگاه', 'max-mag'), __('% دیدگاه', 'max-mag')); ?></span> / <span
                class="icon-file-text"></span></div>
    </div>

</article>
