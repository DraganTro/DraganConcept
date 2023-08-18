<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="logo">
            <!-- Insérez ici le code HTML pour afficher votre logo -->
        </div>
        
        <nav class="menu">
            <?php
                // Affichage du menu principal
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu', // Emplacement du menu
                    'container' => false, // Pas de conteneur supplémentaire
                    'menu_class' => 'menu-list', // Classe CSS pour la liste du menu
                ));
            ?>
        </nav>
    </header>

    <!-- Le reste du contenu de votre site -->

    <?php wp_footer(); ?>
</body>
</html>