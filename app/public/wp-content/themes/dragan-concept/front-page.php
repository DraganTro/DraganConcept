<?php
/**
 * Modèle pour la page d'accueil
 *
 * @package dragan-concept
 */

get_header();
?>

<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Développeur Intégrateur Web junior</h1>
            <p>Spécialisé WordPress</p>
            <p>Création de site web<br> sur-mesure</p>
        </div>
        <div class="hero-image">
        <img class="man-laptop" src="<?php echo esc_url( home_url( '/wp-content/uploads/2023/08/homme-assis-ordinateur.png' ) ); ?>" alt="Homme assis devant un ordinateur portable">
        </div>
    </div>
</section>

<section class="about-section">
    <div class="about-heading">
        <h2>À propos</h2>
    </div>
    <div class="about-content">
        <div class="about-text">
            <h2>Découvrez le pouvoir de la création numérique</h2>
            <p>Bienvenue dans l'univers où chaque ligne de code est une note de musique dans une symphonie numérique.</p>
            <p>Je vous invite à plonger dans mon monde de développement, où la technologie rencontre l'art pour façonner des expériences en ligne uniques.</p>
            <p>Explorez mes projets, admirez les détails et laissez-vous emporter par le mariage parfait entre l'innovation technique et l'esthétique captivante.</p>
            <p><a href="#">En savoir plus...</a></p>
        </div>
    </div>
</section>

<?php
get_footer();