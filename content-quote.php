<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

    <?php
    $id = get_post_thumbnail_id();
    $thumbnail_size = 'large';
    $thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);
    $url = $thumbnail[0];
    $width = $thumbnail[1];
    $height = $thumbnail[2];
    ?>

    <div class="post-inner-content">
        <div class="wrapper" style="background-image: url('<?php echo $url; ?>')">
            <div class="overaly">
                <div class="content">
                    <?php the_content(__('More', 'myblog'), false); ?>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="title"><a
                                    href="<?php the_permalink() ?>">- <?php the_title(); ?></a><?php edit_post_link(__('Edit', 'myblog'), "<span class='edit-link'>", "</span>"); ?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="post-info"><span><?php the_time(get_option('date_format')); ?> </span> /
                                <span> <?php the_category(', '); ?></span> /
                                <span> <?php comments_popup_link(__('No comment', 'myblog'), __('One comment', 'myblog'), __('% comment', 'myblog')); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</article>
