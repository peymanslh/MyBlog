<?php get_header(); ?>
<?php get_template_part('inc/header'); ?>


    <div class="row">
        <div class="container">
            <div class="col-md-8 centered search-query-title">
                <span>نتایج جستجو برای : </span><b><?php the_search_query(); ?></b>
            </div>
        </div>
    </div>
<?php get_template_part('inc/query', 'search'); ?>


<?php get_footer(); ?>
