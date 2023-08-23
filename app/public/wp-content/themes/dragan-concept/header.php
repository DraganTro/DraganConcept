<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Ultra&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="logo">
        <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo esc_url( home_url( '/wp-content/uploads/2023/08/Logo_DC2OK2recadre.png' ) ); ?>" alt="Logo"></a>
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

        <input id="toggle" type="checkbox"></input>
        <label for="toggle" class="hamburger">
            <div class="top-bun"></div>
            <div class="meat"></div>
            <div class="bottom-bun"></div>
        </label>

<div class="nav">
  <div class="nav-wrapper">
    <nav>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'mobile-menu', 'menu_class' => 'mobile-menu-list' // Emplacement du menu
                ));
            ?>
    </nav>
  </div>

    </header>


    <?php wp_footer(); ?>
</body>
</html>