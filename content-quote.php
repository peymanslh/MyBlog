		<section class="my-post format-quote">

            <?php 
				$id = get_post_thumbnail_id();
				$thumbnail_size = 'large';
				$thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);
				$url = $thumbnail[0];
				$width = $thumbnail[1];
				$height = $thumbnail[2];
			?>

            <article>
				<section class="wrapper" style="background-image: url('<?= $url; ?>')">
					<section class="overaly">
						<section class="content">
		                	<?php the_content('ادامه',false); ?>
		                	<div class="row">
		                		<div class="col-md-8">
		                			<div class="title"><a href="<?php the_permalink() ?>">- <?php the_title(); ?></a><?php edit_post_link("ویرایش ","<span class='edit-link'>","</span>");?></div>
		                		</div>
		                		<div class="col-md-4">
		                			<div class="info"><span><?php the_time("j F Y");?> </span> / <span> <?php the_category(', '); ?></span></div>
		                		</div>
		                	</div>
		                </section>
					</section>
				</section>
            </article>
            
        </section>