<?php get_header(); ?>
<?php get_template_part('layouts/header'); ?>


<div class="row">
    <div class="container">
        <div class="col-md-8 col-center search-query-title">
            <span><?php _e('Search result for:', 'myblog'); ?> </span><b><?php the_search_query(); ?></b>
        </div>
    </div>
</div>
<?php get_template_part('layouts/query', 'one'); ?>


<?php get_footer(); ?>
