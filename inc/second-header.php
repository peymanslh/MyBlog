<?php
	$head_h1 = get_option('mb_head_h1');
	$nav_logo = get_option('mb_nav_logo');
?>

<header id="second-header">

	<div class="container">
		<div class="row">
			<?php if($nav_logo == "") { ?>

				<div class="col-md-2 col-xs-12">
					<div id="nav-logo-txt">
						<a href="<?php echo site_url(); ?>"><?= $head_h1; ?></a>
					</div>
					
				</div>

			<?php } else { ?>

			<div class="col-md-2 col-xs-12">
				<a href="<?php echo site_url(); ?>" id="nav-logo-img"><img src="<?= $nav_logo; ?>" alt="<?php bloginfo() ;?>"></a>
			</div>

			<?php } ?>

			<div class="col-md-10">
				<?php include ('navbar.php'); ?>
			</div>
		</div>
	</div>

</header>

<nav id="show-sidebar">
    <a href="#my-menu" id="hamburger" class="simptip-position-left" data-tooltip="منوی اصلی"><span class="icon-three-bars"></span></a>
</nav>