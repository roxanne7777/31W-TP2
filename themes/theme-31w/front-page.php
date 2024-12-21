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
    <h2>Destinations favorites</h2>
    <div class="principal__conteneur">
      <?php if (have_posts()): ?>
        <?php 
          $affiche_galerie = false;
          while (have_posts()) :  the_post(); ?>
          <?php if (in_category('galerie') && !$affiche_galerie): ?>
                    <?php 
                    get_template_part('template-parts/article', 'galerie');
                    $affiche_galerie = true; 
                    ?>
                <?php elseif (in_category('favoris')): ?>
                    <?php get_template_part('template-parts/article', 'nouveaute'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
      </div>
      <?php endif; ?>
  </section>

  <section id="inscription" class="global inscription">
    <?php get_template_part('template-parts/formulaire', 'inscription');?>
  </section>

  <section id="filtre" class=" global filtre">
    <h2>Destinations par catégorie</h2>
    <?php echo do_shortcode('[extraire_article]');?>
    <div class="filtre__articles"></div>
  </section>

</main>
<?php get_footer() ?>