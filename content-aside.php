<section class="my-post format-aside">

    <article>
        <?php the_content('ادامه', false); ?>
    </article>

    <header>
        <?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?>
        <div><span><?php the_time("j F Y"); ?> </span> / <span> <?php the_category(', '); ?></span> / <span> <?php comments_popup_link( __('بدون دیدگاه', 'max-mag'), __( '1 دیدگاه', 'max-mag'), __('% دیدگاه', 'max-mag')); ?></span> / <span
                class="icon-file-text"></span></div>
    </header>

</section>
