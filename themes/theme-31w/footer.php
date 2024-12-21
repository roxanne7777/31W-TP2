
    <footer class="pied">
    <section class="global pied__global">
      <section class="pied__gauche">
        <div>
            <?php
                if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                        }
                else {
                        echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                    }
                ?>
          </div>
          <div>
              <h5><a href="https://github.com/roxanne7777/31W-TP2/tree/ef">Lien github vers la branche ef</a></h5>
              <h5><a href="https://github.com/roxanne7777/filtre-pays">Lien github vers le dépôt de l'extension "filtre-pays"</a></h5>
              <p>Auteur: Roxanne Auclair</p>
              <p>Tp2 et épreuve finale <strong style="color: lemonchiffon">Note: les extensions "filtre post" et "filtre pays" ne peuvent pas être activées en même temps car cela provoque une erreur fatale.</strong></p>
          </div>
      </section>
      <section class="pied__droite">
          <div>
            <?php wp_nav_menu(
                array(
                  "menu" => "principal",
                  "container" => "nav"
                )
                );
                get_search_form();
            ?>
          </div>
          <?php 
            $facebook_icon = get_theme_mod('social_facebook_icon', '');
            $tiktok_icon = get_theme_mod('social_tiktok_icon', '');
            $instagram_icon = get_theme_mod('social_instagram_icon', '');?>
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
          <div>
              <p>3800, rue Sherbrooke Est<br>
                Montréal (Québec) H1X 2A2<br>
                <strong>514 254-7131</strong><br>
                <strong>communic@cmaisonneuve.qc.ca</strong></p>
          </div>
      </section>
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>