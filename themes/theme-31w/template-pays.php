<?php
/**
 * Template name: Pays
 */
?>
<?php get_header(); ?>

  <main class="principal">
    <section class="global">
        <h2>Contenu d'une page - page.php</h2>
        <div class="principal__conteneur">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
              <article class="principal__article">
                  <h5><?php the_title() ?></h5>
                  
                  <p><?php the_content() ?></p>

                  <section class="voyage">
                    <p>Nombre de personnes: <?php the_field('nombre_de_personnes'); ?></p>
                    <p>Date de départ: <?php the_field('date_de_depa'); ?></p>
                    <p>Date de retour: <?php the_field('date_de_retour'); ?></p>
                  </section>
                  
                  <section id="filtre" class=" global filtre">
                    <?php echo do_shortcode('[extraire_pays]');?>
                  </section>
              </article>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </section>
  </main>
  <?php get_footer(); ?>