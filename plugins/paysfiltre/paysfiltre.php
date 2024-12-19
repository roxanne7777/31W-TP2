<?php
/*
plugin name: Filtre Pays
author: Roxanne Auclair
description: Une extension qui permettra de filtrer par pays
*/ 

function charger_scripts_css(){
 
    $version_css = filemtime(plugin_dir_path(__FILE__) . "/style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "/js/paysfiltre.js");
 
    wp_enqueue_style(
        "paysfiltre",        
        plugin_dir_url(__FILE__) . "/style.css",
        array(),
        $version_css
    );  
 
    wp_enqueue_script(
        "paysfiltre",      
        plugin_dir_url(__FILE__) . "/js/paysfiltre.js",
        array(),
        $version_js,
        true
    );
}

add_action('wp_enqueue_scripts', 'charger_scripts_css');

function genere_boutons() {
    $categories = get_categories();
    $contenu = ''; 
    foreach($categories as $elm) {
        $nom = $elm->name;
        $id = $elm->term_id;
        $contenu .= "<button data-id='$id'>$nom</button>";
    }
    return "<div class='filtre__bouton'>$contenu</div>";
}
add_shortcode('extraire_article', 'genere_boutons');

?>