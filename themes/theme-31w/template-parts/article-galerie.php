<?php
/**
 * template-part pour afficher un article galerie
 */
?>

<article class="principal__article galerie">
    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    <?php echo do_shortcode('[carrousel]'); ?>
    <p><?php the_content(); ?></p>
</article>