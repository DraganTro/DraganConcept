<?php
/* Template Name: Single Portfolio */
get_header();

while (have_posts()) : the_post();
    // Afficher les détails du projet ici (description, photos supplémentaires, etc.)
endwhile;

get_footer();
?>