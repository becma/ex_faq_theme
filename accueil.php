<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<main class="accueil">
    <h1>Bienvenue sur mon site d'exemple de FAQ !</h1>
    <?php get_template_part('/assets/templates/banner', 'banner', [
        'title' => get_field('banner_title'),
        'label' => get_field('banner_cta-label'),
        'link' => get_field('banner_cta-page')
    ]) ?>
</main>