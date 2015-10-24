<?php
get_header();

get_template_part('layouts/header');

$project_column = get_option('mb_project_column');

if ($project_column == 2) {

    get_template_part('layouts/query-project');

} elseif ($project_column == 3) {

    get_template_part('layouts/query-project', '3c');

} elseif ($project_column == 4) {

    get_template_part('layouts/query-project', '4c');

} elseif ($project_column == 6) {

    get_template_part('layouts/query-project', '6c');

}

get_footer();
