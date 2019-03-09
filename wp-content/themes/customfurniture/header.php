<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>Встроенная мебель на заказ в Ростове-на-Дону</title>
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/css/style.css" ?>"/>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body class="home">
<div class="lightBack"></div>

        <?php
            $image = get_field('background_image', 'options');
            $backgroundSrc =$image ?? get_template_directory_uri() . '/images/back.jpg';
        ?>
        <header class="header" style="background-image: url(<?= $backgroundSrc ?>);">

            <div class="logo">
<!--                Логотип с символом рубля-->
<!--                T<span>&#8381;</span>OSCAN-->
                TROSCAN
            </div>

            <div class="header_menu header_menu_transparent">
                <div class="menuButton menuButton_light">
                    <span class="menuButton__span"></span>
                    <span class="menuButton__span"></span>
                    <span class="menuButton__span"></span>
                </div>

                <nav class="mainMenu">
                    <div class="mainMenu__wrapper container">
                        <?php
                        $args = array(
                            'theme_location'=>'top',
                            'container'=>'',
                            'depth'=> 0);
                        wp_nav_menu($args);
                        ?>
                    </div>
                </nav>

                <div class="searchpanel">
                    <a href="#!" id="searchbutton" class="searchpanel__button" style="background-image: url(images/search.png);"></a>
                    <form class="searchform">
                        <input type="text" class="searchform__input" placeholder="Поиск...">
                    </form>
                </div>

            </div>

            <div class="contactPhone">
                <a href="tel:89044415778" class="contactPhone__tel">
                    <?php the_field('contact_phone', 'options'); ?>
                </a>
            </div>

            <div class="header_main">
                <h1 class="header_title"><?php the_field('site_title', 'options'); ?></h1>
                <h2 class="header_title header_title__bottom">Правильные решения нестандартных вопросов</h2>

                <div class="container labelsWrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="label">
                                <img src="<?= get_template_directory_uri() . "/images/coin.svg" ?>" alt="" class="label__icon">
                                <p class="label__text label__text_green">Разумные цены</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="label">
                                <img src="<?= get_template_directory_uri() . "/images/clock.svg" ?>" alt="" class="label__icon">
                                <p class="label__text label__text_purple">Разумное время</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="label">
                                <img src="<?= get_template_directory_uri() . "/images/success.svg" ?>" alt="" class="label__icon">
                                <p class="label__text label__text_orange">Высокое качество</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="arrowDown">
                    <div class="arrow_1 clearfix">
                        <span class="arrowDown__left"></span>
                        <span class="arrowDown__right"></span>
                    </div>
                    <div class="arrow_2 clearfix">
                        <span class="arrowDown__left"></span>
                        <span class="arrowDown__right"></span>
                    </div>
                    <div class="arrow_3 clearfix">
                        <span class="arrowDown__left"></span>
                        <span class="arrowDown__right"></span>
                    </div>
                </div>
            </div>

        </header>