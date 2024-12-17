<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <section class="global body__global">
    <h2>Single.php</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <article class="principal__article">
            <h2><?php the_title() ?></h2>
            <?php the_content() ?>
          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>
</main>
<?php get_footer() ?>