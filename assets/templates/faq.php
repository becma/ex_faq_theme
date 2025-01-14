<section class="faq">
    <h2>Foire aux questions</h2>
    <div class="faq_questions">
        <?php
            $questions = new WP_Query([
                'post_type' => 'faq',
                'posts_per_page' => -1, // aucune limite pour le nombre de posts à afficher
            ]);

            if ($questions->have_posts()) :
                while ($questions->have_posts()) : $questions->the_post();
        ?>

            <section class="question">
                <h3><?php the_field('faq_question', $questions->ID) ?></h3>
                <div class="reponse">
                    <?php the_field('faq_reponse', $questions->ID) ?>
                </div>
            </section>

        <?php
            endwhile;
            endif;
        ?>
    </div>
</section>