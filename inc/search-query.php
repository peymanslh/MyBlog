<article id="home-post-one">
<div class="container">

    <div class="row">
        <div class="col-md-8 centered">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <section class="my-post">
            
            <header>
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

                <div><span><?php the_time("j F Y");?> </span> / <span> <?php the_category(', '); ?></span></div>
            </header>
            
            <article>
                <?php the_content_rss('', false, '', 70); ?>
                
            </article>
            
        </section>

    <?php endwhile; ?>
<?php endif; ?>

            <?php mw_pagination(); ?>
        </div>
    </div>
</div>
</article>