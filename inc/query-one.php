<article id="home-post-one">
<div class="container">

    <div class="row">
        <div class="col-md-8 centered">
			<?php if ( have_posts() ) : ?>
			    <?php while ( have_posts() ) : the_post(); ?>

			        <?php get_template_part( 'content', get_post_format() ); ?>

			    <?php endwhile; ?>
			<?php endif; ?>
            <?php mw_pagination(); ?>
        </div>
    </div>
</div>
</article>