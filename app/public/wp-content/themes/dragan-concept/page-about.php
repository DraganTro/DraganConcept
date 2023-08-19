<?php
/*
Template Name: À propos
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_header(); ?>

    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Bienvenue dans mon univers numérique...</h1>
            </div>
            <div class="hero-image">
                <img class="cat-laptop" src="<?php echo esc_url( home_url( '/wp-content/uploads/2023/08/chat-laptop.png' ) ); ?>" alt="Chat assis sur un ordinateur portable">
            </div>
        </div>
        <div class="container">
            <div class="mouse">
		        <span></span>
            </div>
        </div>
    </section>

    <section class="about-me">
        <div class="about-me-content">
            <div class="about-me-text">
                <h2>À propos de moi</h2>
                <p>Bonjour,</p>
                <p>Je suis Dragan, un développeur passionné et créatif spécialisé dans l'écosystème WordPress. Mon voyage dans le domaine du développement a débuté avec une curiosité insatiable pour la façon dont les sites web prennent vie et interagissent avec les utilisateurs. Au fil du temps, cette curiosité s'est transformée en une passion profonde pour la création numérique.</p>
                <p>Ma formation approfondie chez Openclassrooms m'a équipé des compétences techniques et conceptuelles nécessaires pour concevoir et développer des sites web performants et esthétiquement attrayants. Grâce à une solide compréhension du langage PHP, du balisage HTML/CSS et des interactions JavaScript, je suis en mesure de transformer des idées abstraites en interfaces conviviales et fonctionnelles.</p>
                <p>Ce qui me motive avant tout, c'est la possibilité de donner vie à des concepts. Chaque projet est une nouvelle occasion de fusionner l'art et la technologie, de construire des ponts entre des mondes virtuels et la réalité tangible. Mon objectif est de créer des expériences en ligne qui captivent, engagent et laissent une impression durable.</p>
            </div>
            <div class="why-wordpress">
                <h2>Pourquoi WordPress ?</h2>
                <p>WordPress est bien plus qu'une plateforme de gestion de contenu ; c'est une toile vierge sur laquelle je peux peindre des histoires, des identités de marque et des visions uniques. J'ai choisi de me spécialiser dans le développement WordPress parce que cela me permet de réaliser des projets variés, du site web personnel au site e-commerce complexe. La flexibilité de WordPress, associée à ma créativité et à mes compétences techniques, me permet d'offrir des solutions sur mesure pour répondre aux besoins spécifiques de chaque client.</p>
            </div>  
            <div class="my-philo">
                <h2>Ma Philosophie</h2>
                <p>Chaque ligne de code que j'écris est un investissement dans l'expérience de l'utilisateur final. Je m'efforce de créer des sites web rapides, accessibles et intuitifs, en plaçant les besoins de l'utilisateur au cœur de chaque décision de conception et de développement. La collaboration étroite avec mes clients est essentielle pour comprendre leurs objectifs et traduire leurs idées en réalité numérique.</p>
                <p>En dehors de l'univers numérique, je suis un amoureux de la nature, un amateur de photographie et un explorateur de nouveaux horizons. Ces passions nourrissent ma créativité et ma vision du monde, infusant chaque projet avec une perspective unique.</p>
                <p>Je vous invite à explorer mon portfolio pour découvrir comment j'ai donné vie à une variété de projets uniques. Si vous souhaitez discuter de collaboration, de projets passionnants ou simplement échanger des idées, n'hésitez pas à me contacter. Ensemble, nous pouvons repousser les limites de la créativité numérique.</p>
            </div>    
        </div>
    </section>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>