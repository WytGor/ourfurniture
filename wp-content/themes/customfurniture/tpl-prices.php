<?php
/**
 * Template Name: Цены
 * Template Post Type: page
 */

get_header();
?>

<div class="prices-page">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="prices-page__">
                <h2 class="prices-page__title"><?php the_title() ?></h2>
            </div>
            <div class="prices-page__cards">
                <?php foreach (get_field('prices_cards') as $card) : ?>
                    <div class="prices-page__col">
                        <div class="price-card">
                            <div class="price-card__img-wrapper">
                                <div class="fotorama">
                                    <?php foreach ($card['gallery'] as $galleryItem) : ?>
                                        <img src="<?= $galleryItem['sizes']['medium_large'] ?>"
                                             alt="<?= $galleryItem['title'] ?>" class="price-card__img">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <h3 class="price-card__title"><?= $card['title'] ?></h3>
                            <p class="price-card__description">Описание:<br><?= $card['description'] ?></p>
                            <p class="price-card__price"><?= $card['price'] ?> руб.</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endwhile; else : ?>
            <p>Записей нет.</p>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
?>
