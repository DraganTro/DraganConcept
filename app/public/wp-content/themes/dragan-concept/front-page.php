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
            <h1 class="fade-in">Développeur Intégrateur Web junior</h1>
            <p class="fade-in">Spécialisé WordPress</p>
            <p class="fade-in">Création de site web<br> sur-mesure</p>
        </div>
        <div class="hero-image">
        <img class="man-laptop" src="<?php echo esc_url( home_url( '/wp-content/uploads/2023/08/homme-assis-ordinateur.png' ) ); ?>" alt="Homme assis devant un ordinateur portable">
        </div>
        <div class="circle"></div>
        <div class="circle2"></div>
        <div id="container">
            <div class="steam" id="steam1"> </div>
            <div class="steam" id="steam2"> </div>
            <div class="steam" id="steam3"> </div>
            <div class="steam" id="steam4"> </div>
        </div>

        <div class="container">
        <div class="mouse">
		    <span></span>
        </div>
        </div>
</section>

<section class="about-section fade-in-up-about hidden">
    <div class="about-heading">
        <h2>À propos</h2>
    </div>
    <div class="about-content">
        <div class="about-text">
            <h2>Découvrez le pouvoir de la création numérique</h2>
            <p>Bienvenue dans l'univers où chaque ligne de code est une note de musique dans une symphonie numérique.</p>
            <p>Je vous invite à plonger dans mon monde de développement, où la technologie rencontre l'art pour façonner des expériences en ligne uniques.</p>
            <p>Explorez mes projets, admirez les détails et laissez-vous emporter par le mariage parfait entre l'innovation technique et l'esthétique captivante.</p>
            <p><a href="<?php echo esc_url(get_permalink(get_page_by_path('a-propos')->ID)); ?>" class="cta-button">Je découvre</a></p>
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
         $techno = get_field('techno');
         $description = get_field('description');
         $permalink = get_permalink();
   ?>
   
   <div class="portfolio-card fade-in-up-card hidden">
      <a href="<?php echo esc_url($permalink); ?>">
         <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($title); ?>">
         <div class="portfolio-card-overlay">
            <h3><?php echo esc_html($title); ?></h3>
            <p><?php echo esc_html($techno); ?></p>
         </div>
      </a>
   </div>
   
   <?php
      endwhile;
      wp_reset_postdata();
   endif;
   ?>

    <div class="cta-section">
    <a href="<?php echo esc_url(get_permalink(get_page_by_path('portfolio')->ID)); ?>" class="cta-button">Je découvre</a>
    </div>
</section>



<?php
get_footer();