<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
    <section class="global">
        <h2>Liste de cours</h2><code>404.php</code>
        <div class="principal__conteneur">
            <h1>Erreur 404</h1>
            <?php wp_nav_menu(array(
                "menu" => "erreur404",
                "container" => "nav"
            ));



            $args = array(
                'category_name' => "cours",
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <article>
                        <p><?php the_title() ?></p>

                    </article>
                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
    </section>
</main>
<?php get_footer() ?>