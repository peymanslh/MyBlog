<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

    <div class="row">
        <div class="col-md-3 img-responsive img-radius img-border">
            <a href="<?php the_permalink() ?>"><?php if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail');
                } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/no-thumbnail.png" />';
                } ?></a>

            <div class="post-info"><span><?php the_time(get_option( 'date_format' )); ?> </span> /
                <span> <?php the_category(', '); ?></span> /
                <span> <?php comments_popup_link(__('No comment', 'myblog'), __('One comment', 'myblog'), __('% comment', 'myblog')); ?></span>
                /
                <span class="icon-bubble"></span></div>
        </div>
        <div class="col-md-9">
            <div class="status-content">
                <a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?>. </a>
                <?php $content = get_the_content();
                echo $content ?><?php edit_post_link(__('Edit', 'myblog'), "<span class='edit-link'>", "</span>"); ?>
            </div>
        </div>
    </div>

</article>
