
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
    <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/main.css">

    <?php wp_head(); ?>
</head>
<body>