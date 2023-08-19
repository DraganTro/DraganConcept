<?php
/**
 *  Page d'accueil
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
        <div class="container">
        <div class="mouse">
		    <span></span>
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

<section class="section-6">
  <div class="heading">
    <h2>Mes réalisations</h2>
  </div>
  <div class="row">
    <figure class="figure">
      <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2023/08/mota-sante.jpeg' ) ); ?>" alt="Personnes assisent à une table de mariage">
      <figcaption>
        <h3>Isaac Asimov</h3>
        <p>"But suppose we were to teach creationism. What would be the content of the teaching? Merely that a creatore formed the universe and all specias of life ready-made? Nothing? No details?"</p>
      </figcaption>
      <a href="#"></a>
    </figure>
    <figure class="figure">
      <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2023/08/koukaki-accueil.png' ) ); ?>" alt="Page d'accueil du site koukaki">
      <figcaption>
        <h3>Philip K. Dick</h3>
        <p>"I, for one, bet on science as helping us. I have yet to see how it fundamentally endagers us, even with the H-bomb lurking about. Science has given us more lives than it has taken; we must remember that"</p>
      </figcaption>
      <a href="#"></a>
    </figure>
    <figure class="figure">
      <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2023/08/planty.png' ) ); ?>" alt="Boisson planty">
      <figcaption>
        <h3>Jules Verne</h3>
        <p>"The moon, by her comparative proximity, and the constantly varying appearances produced by her several phases, has always occupied a considerable share of the attention of the inhabitants of Earth."</p>
      </figcaption>
      <a href="#"></a>
    </figure>
  </div>
</section>


<?php
get_footer();