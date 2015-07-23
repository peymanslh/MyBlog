
<section class="my-post format-chat">
    
    <header>
        <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php edit_post_link("ویرایش ","<span class='edit-link'>","</span>");?></h1>

        <div><span><?php the_time("j F Y");?> </span> / <span> <?php the_category(', '); ?></span> / <span class="icon-bubbles3"></span></div>
    </header>
    
    <article>
        <?php the_content('ادامه',false); ?>
    </article>
    
</section>