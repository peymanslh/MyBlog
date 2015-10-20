<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

    <div class="post-title">
        <h2>
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?>
        </h2>

        <div class="post-info"><span><?php the_time("j F Y"); ?> </span> / <span> <?php the_category(', '); ?></span> / <span> <?php comments_popup_link( __('بدون دیدگاه', 'max-mag'), __( '1 دیدگاه', 'max-mag'), __('% دیدگاه', 'max-mag')); ?></span> / <span
                class="icon-file-video"></span></div>
    </div>

    <div class="post-inner-content">
        <?php the_content('ادامه', false); ?>
    </div>

</article>
