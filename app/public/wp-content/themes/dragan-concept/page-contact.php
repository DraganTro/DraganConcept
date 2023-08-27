<?php
/*
Template Name: Contact
*/
get_header();
?>

<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text animate-from-left">
            <h1>Vous y êtes presque!</h1>
            <p>Plus qu’un pas à faire...</p>
            <p>Pour avoir votre site personnalisé</p>
        </div>
        <div class="hero-image">
        <img class="cat-screen" src="<?php echo esc_url( home_url( '/wp-content/uploads/2023/08/chat-ecran.png' ) ); ?>" alt="Chat assis derrière un écran d'ordinateur">
        </div>
    </div>
    <div class="container">
        <div class="mouse">
		    <span></span>
        </div>
    </div>
</section>

<section class="flying-cat-section">
    <div class="flying-cat-content">
        <div class="flying-cat-image">
            <img class="flying-cat floating-cat" src="<?php echo esc_url( home_url( '/wp-content/uploads/2023/08/chat-volant.png' ) ); ?>" alt="Chat volant sur un balai">
        </div>
        <div class="flying-cat-text">
            <h2 class="animate-from-right">Ups...</h2>
        </div>
    </div>
</section>

<section class="here-section">
    <h2 class="animate-from-left">C'est ici...</h2>
</section>


<?php get_footer(); ?>