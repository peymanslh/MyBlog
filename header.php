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
    <title><?php bloginfo(); ?><?php wp_title("|"); ?></title>
    <meta name="description" content="<?php wp_title("|"); ?>">
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

    <?php wp_head(); ?>
</head>
<body>
