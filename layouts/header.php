<?php
global $data;
$head_h1 = $data['head_h1'];
$nav_logo = $data['nav_logo'];

$head_logo = $data['head_logo'];
$head_description = $data['head_description'];
// worpdress header image
$header_image = get_header_image();
?>

<header id="second-header">

    <div class="container">
        <div class="row">
            <?php if ($nav_logo == "") { ?>

                <div class="col-md-2 col-xs-12">
                    <div id="nav-logo-txt">
                        <a href="<?php echo site_url(); ?>"><?php echo $head_h1; ?></a>
                    </div>
                </div>

            <?php } else { ?>

                <div class="col-md-2 col-xs-12">
                    <a href="<?php echo site_url(); ?>" id="nav-logo-img"><img src="<?php echo $nav_logo; ?>" alt="<?php bloginfo(); ?>"></a>
                </div>

            <?php } ?>

            <div class="col-md-10">
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
            </div>
        </div>
    </div>

</header>

<div id="box-search" class="modal">
    <form method="get" id="searchform" class="searchform form-search"
          action="<?php echo site_url(); ?>/">
        <input type="text" class="search-query" value="" name="s" id="s" required
               placeholder="<?php _e('Keyword + Enter', 'myblog'); ?>"/>
        <input type="submit" class="btn btn-s-sub icon-search" id="searchsubmit"
               value="<?php _e('Search', 'myblog'); ?>"/>
    </form>
</div>

<?php
if (is_home()) {
      get_header_home();
}
?>
