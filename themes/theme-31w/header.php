<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>31W</title>
  <?php wp_head(); ?>
</head>
<body>
    <header class="entete">
      <section class="global entete__global">
        <div class="entete__titre">
          <?php
            if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                    }
            else {
                    echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                }
            ?>
        </div>
        
        <div class="entete__nav">
          <?php wp_nav_menu(
            array(
              "menu" => "principal",
              "container" => "nav"
            )
            );
            get_search_form();
          ?>
        </div>
      </section>
  </header>
