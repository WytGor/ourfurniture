<?php
/**
 * Template Name: Главная
 * Template Post Type: page
 */

    get_header();
?>

<section class="main main_marginTop">
    <div class="container-fluid aboutUsWrap" id="aboutus">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <h3 class="main_aboutUs wow zoomIn"><?php the_field('about_us_title', 'options') ?></h3>
                <div class="main_aboutUsText wow bounceInLeft">
                    <?php the_field('about_us_text', 'options') ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
        </div>
    </div>

    <div class="container-fluid servicesWrap" id="services">
        <div class="row wow bounceInLeft" data-wow-delay="0.5s">
            <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <h3 class="services__title wow zoomIn"><?php the_field('services_title', 'options') ?></h3>
                <h4 class="services__subtitle wow zoomIn"><?php the_field('services_subtitle', 'options') ?></h4>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
        </div>
        <div class="container services">
            <div class="row">
                <?php
                    $params = array(
                        'posts_per_page' => 4,
                        'category_name'       => 'services',
                        'orderby' => 'date',
                        'order'   => 'ASC',
                    );
                    $query = new WP_Query($params);
                    if($query->have_posts()) { while($query->have_posts()) { $query->the_post();
                ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="service service__left service__top <?php the_field('additional_classes', get_the_ID()) ?>">
                            <img src="<?= the_post_thumbnail_url() ?>" alt="" class="service__img" />
                            <h4 class="service__title"><?= the_title() ?></h4>
                            <p class="service__description">
                                <?= the_content() ?>
                            </p>
                        </div>
                    </div>
                        <?php
                    }}
                ?>
            </div>
        </div>
    </div>

    <div class="container-fluid portfolioWrap" id="portfolio">
        <div class="row wow bounceInLeft" data-wow-delay="0.5s">
            <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <h3 class="portfolio__title wow zoomIn"><?php the_field('portfolio_title', 'options') ?></h3>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
        </div>
        <div class="container portfolioList">
            <div class="row">
                <?php
                $params = array(
                    'posts_per_page' => 9,
                    'category_name'       => 'portfolio',
                    'orderby' => 'date',
                    'order'   => 'ASC',
                );
                $query = new WP_Query($params);
                if($query->have_posts()) { while($query->have_posts()) {
                    $query->the_post();
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="portfolioList__item animated wow slideInLeft">
                                <div class="portfolioList__img"
                                     style="background: url(<?php the_field('photo', get_the_ID()) ?>);"></div>
                            </div>
                        </div>
                        <?php
                    }}
                ?>
            </div>
        </div>
    </div>

    <div class="container-fluid workStepsWrap" id="workprocess">
        <div class="row wow bounceInLeft" data-wow-delay="0.5s">
            <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <h3 class="workSteps__title wow zoomIn"><?php the_field('work_process_title', 'options') ?></h3>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
        </div>
        <div class="container workSteps">
            <?php
            $params = array(
                'posts_per_page' => 9,
                'category_name'       => 'work_process',
                'orderby' => 'date',
                'order'   => 'ASC',
            );
            $query = new WP_Query($params);
            if($query->have_posts()) { while($query->have_posts()) {
            $query->the_post();
            ?>
                <div class="step" style="background: url(<?php the_field('background_image', get_the_ID()) ?>);">
                    <div class="step__content <?php the_field('additional_classes', get_the_ID()) ?> <?= $query->current_post % 2 === 0 ? ' step__content_left ' : ' step__content_right ' ?>">
                        <h4 class="step__title">
                            <?php the_title() ?>
                        </h4>
                        <p class="step__description">
                            <?php the_content() ?>
                        </p>
                    </div>
                </div>
                <?php
            }}
            ?>
        </div>
    </div>


    <div class="container-fluid clientcf" id="contactus">
        <div class="row wow bounceInLeft" data-wow-delay="0.5s">
            <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <h3 class="clientcf__title wow zoomIn"><?php the_field('contact_us_title', 'options') ?></h3>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-2 hidden-xs"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="contact">
                        <div class="contact__header">
                            <img src="images/smartphone-call.svg" alt="" class="contact__icon">
                            <h4 class="contact__title">ТЕЛЕФОН</h4>
                        </div>
                        <ul class="contact__list">
                            <li class="contact__item">
                                <a href="+79044415778" class="contact__link">+7 (904) 441-57-78</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact">
                        <div class="contact__header">
                            <img src="images/email.svg" alt="" class="contact__icon">
                            <h4 class="contact__title">E-MAIL</h4>
                        </div>
                        <ul class="contact__list">
                            <li class="contact__item">
                                <a href="mailto:altabaev2013@gmail.com" class="contact__link">altabaev2013@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <form class="form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <input type="text" class="form__input form__input_top" placeholder="ВАШЕ ИМЯ">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <input type="text" class="form__input" placeholder="ВАШ E-MAIL">
                            </div>
                        </div>
                        <div class="row form__separator">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <input type="text" class="form__input form__input_bottom" placeholder="ТЕМА ПИСЬМА">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <input type="text" class="form__input" placeholder="НАЗВАНИЕ ВАШЕЙ КОМПАНИИ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea name="" id="" cols="30" rows="10" class="form__textarea" placeholder="НАПИШИТЕ СВОЕ СООБЩЕНИЕ"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="submit" class="form__submit" value="ОТПРАВИТЬ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>
