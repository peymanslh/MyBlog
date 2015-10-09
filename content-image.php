<?php
$id = get_post_thumbnail_id();
$thumbnail_size = 'large'; // or array(width, height);
$thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);// the_post_thumbnail('thumbnail');
$url = $thumbnail[0];
$width = $thumbnail[1];
$height = $thumbnail[2];
?>
<section class="my-post">
    <header>
        <h1>
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link("ویرایش ", "<span class='edit-link'>", "</span>"); ?>
        </h1>

        <div><span><?php the_time("j F Y"); ?> </span> / <span> <?php the_category(', '); ?></span> / <span
                class="icon-camera"></span></div>
    </header>

    <article>
        <img src="<?php echo $url ?>" alt="<?php the_title(); ?>">
        <?php the_content('ادامه', false); ?>
    </article>
</section>