<section class="my-post">

    <header>
        <h1><a href="<?php $content = get_the_content(); echo $content ?>"><span class="icon-link"></span> <?php the_title(); ?></a><?php edit_post_link("ویرایش ","<span class='edit-link'>","</span>");?></h1>

        <div><span><?php the_time("j F Y");?> </span> / <span> <?php the_category(', '); ?></span> / <span class="icon-link"></span></div>
    </header>

</section>