<?php get_header(); ?>
<?php include('inc/second-header.php'); ?>

<?php
$project_column = get_option('mb_project_column');

if ($project_column == 2) {

    include('inc/query-project.php');

} elseif ($project_column == 3) {

    include('inc/query-project-3c.php');

} elseif ($project_column == 4) {

    include('inc/query-project-4c.php');

} elseif ($project_column == 6) {

    include('inc/query-project-6c.php');

}
?>


<?php get_footer(); ?>