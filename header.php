
<?php
$theme_color = get_option('mb_theme_color');
$favicon = get_option('mb_favicon');
$apple_icon = get_option('mb_apple_icon');

 ?>

<!doctype html>
<html <?php language_attributes() ;?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo() ;?><?php wp_title("|") ;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="apple-touch-icon" href="<?= $apple_icon; ?>">
    <link rel="shortcut icon" href="<?= $favicon; ?>" />
    <!--[if lt IE 9]>
    <script src="<?= esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/style.css">

    <?php if($theme_color == 'main') { ?>
        <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/main.css">
    <?php }elseif($theme_color == 'blue') { ?>
        <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/blue.css">
    <?php }elseif($theme_color == 'green') { ?>
        <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/green.css">
    <?php }elseif($theme_color == 'orange') { ?>
        <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/orange.css">
    <?php }elseif($theme_color == 'flamingo') { ?>
        <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/flamingo.css">
    <?php }elseif($theme_color == 'magenta') { ?>
        <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/magenta.css">
    <?php } ?>
    

    <?php wp_head(); ?>
</head>
<body>
