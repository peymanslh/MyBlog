<div class="row">
    <div class="col-md-8 col-center">
        <div class="btn-dd" id="share-this">
            <div class="divider-mini"></div>
            <button type="button" id="btn-share" data-toggle="dropdown"
                    class="btn"><?php _e('Share this page', 'myblog'); ?>
                <span class="icon-share"></span>
            </button>
            <ul class="dropdown">
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="c-facebook"><span
                            class="icon-facebook"></span> <?php _e('Facebook', 'myblog'); ?></a></li>
                <li><a href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>"
                       class="c-twitter"><span class="icon-twitter"></span> <?php _e('Twitter', 'myblog'); ?></a></li>
                <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="c-google"><span
                            class="icon-google"></span> <?php _e('Google +', 'myblog'); ?></a></li>
                <li>
                    <a href="http://www.linkedin.com/sharearticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"
                       class="c-linkedin"><span class="icon-linkedin"></span> <?php _e('Linkedin', 'myblog'); ?></a>
                </li>
                <li>
                    <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                    echo $thumb['0']; ?>&description=<?php the_title(); ?>" class="c-pinterest"><span
                            class="icon-pinterest"></span> <?php _e('Pinterest', 'myblog'); ?></a></li>
            </ul>
        </div>
    </div>
</div>
