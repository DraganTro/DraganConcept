<?php
/**
 * Template Name: Projet Single
 * Template Post Type: post, projet // Assurez-vous que "projet" est bien spécifié ici
 */

get_header();

if (have_posts()) :
    while (have_posts()) :
       the_post();
       $title = get_the_title();
       $description = get_field('description');
       $image = get_field('image');
       $additional_images = get_field('additional_images');
 ?>
    <section class="portfolio-single-section">
       <div class="portfolio-single-featured-image">
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($title); ?>">
       </div>
    </section>
 
    <section class="portfolio-single-section">
       <div class="portfolio-single-info">
          <h2><?php echo esc_html($title); ?></h2>
          <p><?php echo esc_html($description); ?></p>
       </div>
       <div class="portfolio-single-additional-image">
          <img src="<?php echo esc_url($additional_images[0]['url']); ?>" alt="Additional Image 1">
       </div>
    </section>
 
    <section class="portfolio-single-section">
       <div class="portfolio-single-additional-images">
          <div class="portfolio-single-additional-image">
             <img src="<?php echo esc_url($additional_images[1]['url']); ?>" alt="Additional Image 2">
          </div>
          <div class="portfolio-single-additional-image">
             <img src="<?php echo esc_url($additional_images[2]['url']); ?>" alt="Additional Image 3">
          </div>
       </div>
    </section>
 <?php
    endwhile;
 endif;


get_footer();
?>