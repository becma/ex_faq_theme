<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>

<main>
    <?php 
        get_template_part('/assets/templates/title-block', 'title-block', [
            'title' => get_the_title()
        ]);
        get_template_part('/assets/templates/faq');
    ?>
</main>