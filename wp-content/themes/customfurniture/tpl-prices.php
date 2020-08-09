<?php
/**
 * Template Name: Цены
 * Template Post Type: page
 */

get_header();
?>

<div class="prices-page container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php foreach (get_field('prices_cards') as $card) : ?>
            <h3><?= $card['title'] ?></h3>
            <p>Описание:<br><?= $card['description'] ?></p>
            <p>Цена:<br><?= $card['price'] ?></p>
            <p>Изображения:</p>
            <?php foreach ($card['gallery'] as $galleryItem) : ?>
                <img src="<?= $galleryItem['sizes']['medium_large'] ?>" alt="<?= $galleryItem['title'] ?>">
            <?php endforeach; ?>
        <?php endforeach; ?>
        <hr/>
    <?php endwhile; else : ?>
        <p>Записей нет.</p>
    <?php endif; ?>
</div>

<?php
get_footer();
?>
