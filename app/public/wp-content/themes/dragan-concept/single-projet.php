<?php
/**
 * Template Name: Projet Single
 * Template Post Type: post, projet 
 */

get_header();

if (have_posts()) :
    while (have_posts()) :
       the_post();
       $title = get_the_title();
       $techno = get_field('techno');
       $description = get_field('description');
       $image = get_field('image');
       $image2 = get_field('image2');
       $image3 = get_field('image3');
       $image4 = get_field('image4');
 ?>
    <section class="portfolio-single-section">
       <div class="portfolio-single-featured-image">
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($title); ?>">
       </div>
    </section>
 
    <section class="portfolio-single-section">
       <div class="portfolio-single-info">
          <h2><?php echo esc_html($title); ?></h2>
          <p><?php echo esc_html($techno); ?></p>
          <p><?php echo esc_html($description); ?></p>
       </div>
       <div class="portfolio-single-additional-image">
          <img src="<?php echo esc_url($image2['url']); ?>" alt="Additional Image 2">
       </div>
    </section>
 
    <section class="portfolio-single-section">
       <div class="portfolio-single-additional-images">
          <div class="portfolio-single-additional-image">
             <img src="<?php echo esc_url($image3['url']); ?>" alt="Additional Image 3">
          </div>
          <div class="portfolio-single-additional-image">
             <img src="<?php echo esc_url($image4['url']); ?>" alt="Additional Image 4">
          </div>
       </div>
    </section>
 <?php
    endwhile;
 endif;


get_footer();
?>