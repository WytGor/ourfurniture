<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php the_field('site_head_title', 'options'); ?></title>
    <meta name="description" content="<?php the_field('site_description', 'options'); ?>">
    <meta name="keywords" content="<?php the_field('site_keywords', 'options'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>
        <?php // Генерируем тайтл в зависимости от контента с разделителем " | "
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
        ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/bootstrap.css" ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/bootstrap-theme.css" ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . "/vendor/wow-animation/animate.min.css" ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . "/vendor/magnific-popup/magnific-popup.css" ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/vendor/fotorama/fotorama.css" ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/style.css" ?>">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <meta name="yandex-verification" content="9bf32be54852ed62" />
    <?php wp_head(); ?>
</head>
<body class="home">
<div class="lightBack"></div>

<div class="header_menu header_menu_transparent">
    <div class="menuButton menuButton_light">
        <span class="menuButton__span"></span>
        <span class="menuButton__span"></span>
        <span class="menuButton__span"></span>
    </div>

    <nav class="mainMenu">
        <div class="mainMenu__wrapper container">
            <div class="logotype">
                <a href="/#">TROSCAN</a>
            </div>
            <?php
            $args = array(
                'theme_location'=>'top',
                'container'=>'',
                'depth'=> 0);
            wp_nav_menu($args);
            ?>
        </div>
    </nav>

</div>

