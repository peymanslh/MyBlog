<?php
$id = get_post_thumbnail_id();
$thumbnail_size = 'thumbnail'; // or array(width, height);
$thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);// the_post_thumbnail('thumbnail');
$url = $thumbnail[0];
$width = $thumbnail[1];
$height = $thumbnail[2];
?>
<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

    <div class="row">
        <div class="col-md-3 img-responsive img-radius img-border">
            <a href="<?php the_permalink() ?>"><img src="<?php echo $url; ?>" alt="<?php the_title(); ?>"></a>

            <div class="post-info"><span><?php the_time("j F Y"); ?> </span> / <span> <?php the_category(', '); ?></span> / <span> <?php comments_popup_link( __('No comment', 'myblog'), __( 'One comment', 'myblog'), __('% comment', 'myblog')); ?></span> /
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
