<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header() ?>

<main class="principal">
  <?php
  // Récupérer les données du Customizer
  get_template_part('template-parts/customizer', 'hero');
  ?>

  <section class="global nouveau">
    <h2>Liste de cours - Front-page.php</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php while (have_posts()) :  the_post(); ?>
          <?php get_template_part('template-parts/article', 'nouveaute');?>
          
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>

  <section id="inscription" class="global inscription">
    <?php get_template_part('template-parts/formulaire', 'inscription');?>
  </section>

  <section id="filtre" class=" global filtre">
    <?php echo do_shortcode('[extraire_article]');?>
  </section>

</main>
<?php get_footer() ?>