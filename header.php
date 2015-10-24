<?php
$theme_color = get_option('mb_theme_color');
$favicon = get_option('mb_favicon');
$apple_icon = get_option('mb_apple_icon');
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
      <?php
      global $page, $paged;
      wp_title( '|', true, 'right' );
      // Add the blog name.
      bloginfo( 'name' );
      // Add the blog description for the home/front page.
      $site_description = get_bloginfo( 'description', 'display' );
      if ( $site_description && ( is_home() || is_front_page() ) )
      echo " | $site_description";
      // Add a page number if necessary:
      if ( $paged >= 2 || $page >= 2 )
      echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );
      ?>
    </title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="apple-touch-icon" href="<?php echo $apple_icon; ?>">
    <link rel="shortcut icon" href="<?php echo $favicon; ?>"/>
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/javascript/html5.js"></script>
    <![endif]-->

    <?php if ($theme_color == 'main') { ?>
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/main.css">
    <?php } elseif ($theme_color == 'blue') { ?>
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/blue.css">
    <?php } elseif ($theme_color == 'green') { ?>
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/green.css">
    <?php } elseif ($theme_color == 'orange') { ?>
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/orange.css">
    <?php } elseif ($theme_color == 'flamingo') { ?>
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/flamingo.css">
    <?php } elseif ($theme_color == 'magenta') { ?>
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/magenta.css">
    <?php } ?>

    <?php load_theme_textdomain('myblog',get_template_directory().'/language'); ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
