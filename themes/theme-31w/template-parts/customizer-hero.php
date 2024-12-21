<?php
  // Récupérer les données du Customizer
  $hero_title = get_theme_mod('hero_title', 'Bienvenue sur mon site');
  $hero_subtitle = get_theme_mod('hero_subtitle', 'Your success starts here.');
  $hero_background = get_theme_mod('hero_background', '');
  $hero_cta_text = get_theme_mod('hero_cta_text', 'Learn More');
  $hero_cta_link = get_theme_mod('hero_cta_link', '#'); 
  
  $facebook_icon = get_theme_mod('social_facebook_icon', '');
  $tiktok_icon = get_theme_mod('social_tiktok_icon', '');
  $instagram_icon = get_theme_mod('social_instagram_icon', ''); ?>

  <section class="global hero" style="background-image: url('<?php echo esc_url($hero_background); ?>');">
    <div class="hero__contenu">
      <h1><?php echo esc_html($hero_title); ?></h1>
      <p><?php echo esc_html($hero_subtitle); ?></p>
      <?php if (!empty($hero_cta_text) && !empty($hero_cta_link)) : ?>
        <a href="<?php echo esc_url($hero_cta_link); ?>" class="hero__cta">
          <?php echo esc_html($hero_cta_text); ?>
        </a>
      <?php endif; ?>

      <div class="hero__social-icons">
        <a href="https://facebook.com" >
          <img src="<?php echo esc_url($facebook_icon); ?>" class="social-icon facebook" alt="Facebook" />
        </a>
        
        <a href="https://tiktok.com">
          <img src="<?php echo esc_url($tiktok_icon); ?>" class="social-icon tiktok" alt="Tiktok" />
        </a>
        
        <a href="https://instagram.com" >
          <img src="<?php echo esc_url($instagram_icon); ?>" class="social-icon instagram" alt="Instagram" />
        </a>
      </div>
    </div>
  </section>