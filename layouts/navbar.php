<nav class="my-menu">
    <?php
    $argsmenu = array(
        'theme_location' => 'top_menu',
        'container' => false,
        'depth' => 4,
    );
    wp_nav_menu($argsmenu);
    ?>

    <ul>
        <li id="btn-search"><a href="#!" class="simptip-position-bottom"
                               data-tooltip="<?php _e('Search', 'myblog'); ?>"><span
                    class="icon-search"></span></a></li>
    </ul>
</nav>
<div id="box-search" class="modal">
    <form method="get" id="searchform" class="searchform form-search"
          action="<?php echo site_url(); ?>/">
        <input type="text" class="search-query" value="" name="s" id="s" required
               placeholder="<?php _e('Keyword + Enter', 'myblog'); ?>"/>
        <input type="submit" class="btn btn-s-sub icon-search" id="searchsubmit"
               value="<?php _e('Search', 'myblog'); ?>"/>
    </form>
</div>
