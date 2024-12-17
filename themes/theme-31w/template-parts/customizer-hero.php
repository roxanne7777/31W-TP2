<?php
  // Récupérer les données du Customizer
  $hero_title = get_theme_mod('hero_title', 'Bienvenue sur mon site');
  $hero_subtitle = get_theme_mod('hero_subtitle', 'Your success starts here.');
  $hero_background = get_theme_mod('hero_background', '');
  $hero_cta_text = get_theme_mod('hero_cta_text', 'Learn More');
  $hero_cta_link = get_theme_mod('hero_cta_link', '#'); ?>

  <section class="global hero" style="background-image: url('<?php echo esc_url($hero_background); ?>');">
    <div class="hero__contenu">
      <h1><?php echo esc_html($hero_title); ?></h1>
      <p><?php echo esc_html($hero_subtitle); ?></p>
      <?php if (!empty($hero_cta_text) && !empty($hero_cta_link)) : ?>
        <a href="<?php echo esc_url($hero_cta_link); ?>" class="hero__cta">
          <?php echo esc_html($hero_cta_text); ?>
        </a>
      <?php endif; ?>
    </div>
  </section>