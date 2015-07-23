<?php get_header();?>
<?php include ('inc/second-header.php'); ?>


<div class="row">
	<div class="container">
		<div class="col-md-8 centered search-query-title">
			<span>نتایج جستجو برای : </span><b><?php the_search_query(); ?></b>
		</div>
	</div>
</div>
<?php include ('inc/search-query.php'); ?>


<?php get_footer();?>