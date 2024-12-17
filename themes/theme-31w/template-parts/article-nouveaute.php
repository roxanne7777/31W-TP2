<?php
/**
 * template-part pour afficher un article de nouveauté
 */
?>

<article class="principal__article">
    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    <p><?php echo wp_trim_words(get_the_excerpt(), 20, null); ?></p>
</article>