<nav class="my-menu">
        <?php
        $argsmenu = array(
            'theme_location'    => 'top_menu',
            'container'            =>    false,
            'depth'                =>    4,
        );
        wp_nav_menu($argsmenu);
        ?>

        <ul>
            <li id="btn-search"><a href="#!" class="simptip-position-bottom" data-tooltip="جستجو"><span class="icon-search"></span></a></li>

                <div id="box-search" class="modal">
                        <form role="search" method="get" id="searchform" class="searchform form-search" action="<?php echo site_url(); ?>/">
                            <input type="text" class="search-query" value="" name="s" id="s" required placeholder="کلمه مورد نظر + اینتر" />
                            <input type="submit" class="btn btn-s-sub icon-search" id="searchsubmit" value="جستجو" />
                        </form>
                </div>
        </ul>
</nav>