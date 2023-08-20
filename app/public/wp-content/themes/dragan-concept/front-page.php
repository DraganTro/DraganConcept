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

<h2 class="my-projects">Mes réalisations</h2>
<section class="portfolio-section">
  
   <?php
   $args = array(
      'post_type' => 'projet',
      'posts_per_page' => 3
   );
   $projects = new WP_Query($args);
   
   if ($projects->have_posts()) :
      while ($projects->have_posts()) :
         $projects->the_post();
         $image = get_field('image');
         $title = get_the_title();
         $description = get_field('description');
         $permalink = get_permalink();
   ?>
   
   <div class="portfolio-card">
      <a href="<?php echo esc_url($permalink); ?>">
         <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($title); ?>">
         <div class="portfolio-card-overlay">
            <h3><?php echo esc_html($title); ?></h3>
            <p><?php echo esc_html($description); ?></p>
         </div>
      </a>
   </div>
   
   <?php
      endwhile;
      wp_reset_postdata();
   endif;
   ?>
</section>



<?php
get_footer();