<?php
$id = get_post_thumbnail_id();
$thumbnail_size = 'large'; // or array(width, height);
$thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);// the_post_thumbnail('thumbnail');
$url = $thumbnail[0];
$width = $thumbnail[1];
$height = $thumbnail[2];
?>
<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
    <div class="post-title">
        <h2>
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?>
        </h2>

        <div class="post-info"><span><?php the_time("j F Y"); ?> </span> / <span> <?php the_category(', '); ?></span> / <span> <?php comments_popup_link( __('No comment', 'myblog'), __( 'One comment', 'myblog'), __('% comment', 'myblog')); ?></span> / <span
                class="icon-camera"></span></div>
    </div>

    <div class="post-inner-content">
        <img src="<?php echo $url ?>" alt="<?php the_title(); ?>">
        <?php the_content(__('More', 'myblog'), false); ?>
    </div>
</article>
