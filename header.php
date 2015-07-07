<!doctype html>
<html <?php language_attributes() ;?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo() ;?><?php wp_title("|") ;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="apple-touch-icon" href="<?= esc_url( get_template_directory_uri() ); ?>/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?= esc_url( get_template_directory_uri() ); ?>/favicon.ico" />
    <!--[if lt IE 9]>
    <script src="<?= esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/style.css">
    <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/main.css">

    <?php wp_head(); ?>
</head>
<body>
    <div>

<?php include ('inc/off-canvas.php'); ?>