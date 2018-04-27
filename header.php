<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() . 'css/style.css'; ?>">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300,500">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'practical-ml-program' ); ?>>
<div class="wrapper">
    <header>
        <div class="container">
            <div class="holder">
                <a href="<?= home_url() ?>" title="" class="logo">
                    <img src="<?= get_template_directory_uri() ?>/images/logo-big.svg" alt="DataRobot" class="logo-img">
                </a>
                <p class="subtitle">Real-Life Machine Learning. As Real as it Gets.</p>
            </div>
        </div>
    </header>
