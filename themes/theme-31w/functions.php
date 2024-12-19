<?php

function theme_31w_customize_register($wp_customize)
{

    // Section pour la zone Hero
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'theme_31w'),
        'priority' => 30,
    )); // Option : Titre principal
    $wp_customize->add_setting('hero_title', array(
        'default' => __('Bienvenue sur mon site', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    )); // Option : Sous-titre
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => __('Your success starts here.', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Option : Image d'arrière-plan
    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Hero Background Image', 'theme_31w'),
        'section' => 'hero_section',
    )));

    // Option : Texte du bouton CTA
    $wp_customize->add_setting('hero_cta_text', array(
        'default' => __('Learn More', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_cta_text', array(
        'label' => __('CTA Button Text', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Option : Lien du bouton CTA
    $wp_customize->add_setting('hero_cta_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('hero_cta_link', array(
        'label' => __('CTA Button Link', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'url',
    ));
}
add_action('customize_register', 'theme_31w_customize_register');

/*--------------------------------------------------------------------------------------*/

function theme_31w_customize_register_social_icons($wp_customize) {
    $wp_customize->add_section('social_icons_section', array(
        'title' =>__('Icones sociales', 'theme_31w'),
        'priority' => 40
    ));
}

/*--------------------------------------------------------------------------------------*/

function ajouter_donnees_js() {
    wp_enqueue_script('mon-script', get_template_directory_uri() . '/js/scripts.js', array(), null, true);
    wp_localize_script('mon-script', 'siteData', array(
        'apiUrl' => get_site_url() . '/wp-json/wp/v2',
    ));
}
add_action('wp_enqueue_scripts', 'ajouter_donnees_js');

function ajouter_style()
{

    wp_enqueue_style(
        'mon_style',
        get_template_directory_uri() . '/style.css',
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}

add_action('wp_enqueue_scripts', 'ajouter_style');

function ajout_options() {
    //Activer le support des menus personnalisés
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'		=> 150,
        'width'			=> 150,
        'flex-height'	=> true,
        'flex-width'	=> true,
	));
}

add_action("after_setup_theme", "ajout_options");

/*------------------------------------------------------ Modifier la requête principale */
/**
 * Modifie la requete principale de WordPress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
    $query->set( 'category_name', 'favoris' );
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'modifie_requete_principal' );