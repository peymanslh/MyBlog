<?php get_header();?>
<?php include ('inc/page-header.php'); ?>

<section>
	<div class="container">
		<section class="col-md-9 centered">

			<?php if(have_posts()) : while(have_posts()) : the_post() ; ?>

			<section class="my-post">

				<header>
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				</header>

				<article>
					 <?php the_content(); ?>
				</article>
			</section>

				<?php endwhile; else: ?>
    			<h2>متاسفم, مطلبی ای که دنبالش میگردید یافت نشد.</h2>
			<?php endif ;?>

		</section>
	</div>
</section>



<?php get_footer();?>