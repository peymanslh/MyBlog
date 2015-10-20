<?php
$id = get_post_thumbnail_id();
$thumbnail_size = 'thumbnail'; // or array(width, height);
$thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);// the_post_thumbnail('thumbnail');
$url = $thumbnail[0];
$width = $thumbnail[1];
$height = $thumbnail[2];
?>
<section class="my-post format-status">

    <div class="row">
        <div class="col-md-3 img-responsive img-radius img-border">
            <a href="<?php the_permalink() ?>"><img src="<?php echo $url; ?>" alt="<?php the_title(); ?>"></a>

            <div class="info"><span><?php the_time("j F Y"); ?> </span> / <span> <?php the_category(', '); ?></span> / <span> <?php comments_popup_link( __('بدون دیدگاه', 'max-mag'), __( '1 دیدگاه', 'max-mag'), __('% دیدگاه', 'max-mag')); ?></span> /
                <span class="icon-bubble"></span></div>
        </div>
        <div class="col-md-9">
            <section class="status-content">
                <a class="title" href="<?php the_permalink() ?>"><?php the_title(); ?>. </a>
                <?php $content = get_the_content();
                echo $content ?><?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?>
            </section>
        </div>
    </div>

</section>
