<?php
/*
Template Name: Portfolio
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        $args = array(
            'post_type' => 'projet', // Remplacez "votre_type_de_projet" par le nom de votre type de contenu personnalisé pour les projets
            'posts_per_page' => -1, // Récupère tous les projets
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            $project_index = 0; // Variable pour suivre l'index du projet
            while ($query->have_posts()) {
                $query->the_post();
                $image = get_field('image'); // Remplacez 'image' par le nom du champ ACF correspondant à l'image du projet
                $titre = get_the_title();
                $intro = get_field('intro'); // Remplacez 'intro' par le nom du champ ACF correspondant à l'introduction du projet
                $lien = get_permalink();

                // Classe CSS pour l'alignement de l'image et du texte
                $alignment_class = ($project_index % 2 === 0) ? 'project-left' : 'project-right';

                // Affichage du contenu du projet avec l'alignement inversé
                ?>
                <div class="project-wrapper <?php echo $alignment_class; ?>">
                    <div class="project-image">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                    <div class="project-content">
                        <h2><?php echo $titre; ?></h2>
                        <p><?php echo $intro; ?></p>
                        <a href="<?php echo $lien; ?>" class="btn-en-savoir-plus">En savoir plus</a>
                    </div>
                </div>
                <?php

                $project_index++; // Incrémente l'index du projet
            }
        }

        wp_reset_postdata();
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>