<?php
get_header();

get_template_part('layouts/header');

$project_column = get_option('mb_project_column');
?>
<div id="query-project">
    <div class="container">

        <div class="row">
            <div class="col-md-12 centered">
                <?php
                if ($project_column == 2) {

                    get_template_part('layouts/query-project');

                } elseif ($project_column == 3) {

                    get_template_part('layouts/query-project', '3c');

                } elseif ($project_column == 4) {

                    get_template_part('layouts/query-project', '4c');

                } elseif ($project_column == 6) {

                    get_template_part('layouts/query-project', '6c');

                }
                ?>
                <?php mw_pagination(); ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
