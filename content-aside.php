
<section class="my-post format-aside">
    
    <article>
        <?php the_content('ادامه',false); ?>
    </article>
    
    <header>
    	<?php edit_post_link("ویرایش ","<span class='edit-link'>","</span>");?>
        <div><span><?php the_time("j F Y");?> </span> / <span> <?php the_category(', '); ?></span> / <span class="icon-file-text"></span></div>
    </header>
    
</section>