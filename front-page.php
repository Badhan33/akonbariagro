<?php
/**
 * Front Page
 */

get_header();
?>

    <?php get_template_part( 'template-parts/content', 'banner' ) ?>
    <?php get_template_part( 'template-parts/content', 'about' ) ?>
    <?php get_template_part( 'template-parts/content', 'products' ) ?>
    <?php get_template_part( 'template-parts/content', 'team' ) ?>

<?php
get_footer();
