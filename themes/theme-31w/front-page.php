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

          <article class="principal__article">
            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20, null); ?></p>
          </article>
        <?php endwhile; ?>
    </div>
  <?php endif ?>
  </section>

  <section id="inscription" class="global inscription">
    <h2>Inscription</h2>
    <form action="" method="post">
      <label for="nom">Nom</label>
      <input type="text" name="nom" id="nom" required>
      <label for="prenom">Prénom</label>
      <input type="text" name="prenom" id="prenom" required>
      <label for="email">Courriel</label>
      <input type="email" name="email" id="email" required>
      <button type="submit">S'inscrire</button>
    </form>

  </section>

  <section id="inscription" class=" global filtre">
        <!-- Un appel à rest api filtre -->
  </section>

</main>
<?php get_footer() ?>