<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TukiOne
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part( 'template-parts/content', 'search' ); ?>
</main>

<?php
get_footer();