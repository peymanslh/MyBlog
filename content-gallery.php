<?php add_shortcode('gallery', 'content_gallery_shortcode'); ?>

<section class="my-post format-gallery">

    <header>
        <h2>
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?>
        </h2>

        <div><span><?php the_time("j F Y"); ?> </span> / <span> <?php the_category(', '); ?></span> / <span> <?php comments_popup_link( __('بدون دیدگاه', 'max-mag'), __( '1 دیدگاه', 'max-mag'), __('% دیدگاه', 'max-mag')); ?></span> / <span
                class="icon-image"></span></div>
    </header>

    <article>
        <?php the_content('ادامه', false); ?>
    </article>

</section>
