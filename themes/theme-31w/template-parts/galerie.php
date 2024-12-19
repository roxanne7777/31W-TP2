<?php
/**
 * template-part pour afficher une galerie
 */
?>

<section class="galerie">
    <?php echo do_shortcode('[afficher_galerie page_id="' . get_the_ID() . '"]'); ?>
</section>