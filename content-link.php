<section class="my-post">

    <header>
        <h2><a href="<?php $content = get_the_content();
            echo $content ?>"><span class="icon-link"></span> <?php the_title(); ?>
          </a><?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?></h2>

        <div><span><?php the_time("j F Y"); ?> </span> / <span> <?php the_category(', '); ?></span> / <span> <?php comments_popup_link( __('بدون دیدگاه', 'max-mag'), __( '1 دیدگاه', 'max-mag'), __('% دیدگاه', 'max-mag')); ?></span> /<span
                class="icon-link"></span></div>
    </header>

</section>
