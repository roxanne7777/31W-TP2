<?php
/*
plugin name: Carrousel
description: Carrousel permettant d'afficher le contenu d'une galerie
author: Roxanne Auclair
*/

/*
    - générer le code HTML d'une partie de la boite modale
    - créer un bouton qui permettra d'ouvrir la boite modale
    - créer une feuille de style pour la boite modale
    - script permettant d'ouvrir et fermer la boite modale
*/

function enfile_css_script() {
    $version_css = filemtime(plugin_dir_path(__FILE__). "/style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__). "/js/carrousel.js");

    wp_enqueue_style(
        "carrousel",
        plugin_dir_url(__FILE__). "/style.css",
        array(),
        $version_css
    );

    wp_enqueue_script(
        "carrousel",
        plugin_dir_url(__FILE__). "/js/carrousel.js",
        array(),
        $version_js,
        true
    );
}

function generer_carrousel(){
    $chaine = '
    <div class="carrousel">
        <button class="carrousel__x"><img src="https://s2.svgbox.net/hero-solid.svg?ic=x&color=000" width="32" height="32"></button>
        <button class="carrousel__gauche"><img src="https://s2.svgbox.net/hero-solid.svg?ic=chevron-left&color=000" width="32" height="32"></button>
        <button class="carrousel__droite"><img src="https://s2.svgbox.net/hero-solid.svg?ic=chevron-right&color=000" width="32" height="32"></button>
        <figure class="carrousel__figure"></figure>
        <form class="carrousel__form"></form>
    </div>';

    return $chaine;
}

add_shortcode("carrousel", function($atts, $content = null) {
    enfile_css_script(); 
    return generer_carrousel();
});
?>


