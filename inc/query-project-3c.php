

<article id="query-project">
<div class="container">

    <div class="row">
        <div class="col-md-12 centered">

			        <div class="row">
			        	<?php if ( have_posts() ) : ?>
			    			<?php while ( have_posts() ) : the_post(); ?>

			    			<?php 
							$id = get_post_thumbnail_id();
							$thumbnail_size = 'project_thumb'; // or array(width, height);
							$thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);// the_post_thumbnail('thumbnail');
							$url = $thumbnail[0];
							$width = $thumbnail[1];
							$height = $thumbnail[2];
							?>



					        	<div class="col-md-4 col-sm-6 project-thumb">
					        		<a href="<?php the_permalink() ?>">
										<img src="<?= $url ?>" alt="<?php the_title(); ?>">
										<div class="overaly"></div>
										<div class="title"><span><?php the_title(); ?></span></div>
					        		</a>
					        	</div>
			        		<?php endwhile; ?>
						<?php endif; ?>
			        </div>

			    
            <?php mw_pagination(); ?>
        </div>
    </div>
</div>
</article>