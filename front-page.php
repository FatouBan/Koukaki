<?php

get_header();
?>

    <main id="primary" class="site-main">
    <section class="banner-container fade-from-top">
        <video id="video-bg" class="fade-from-top" autoplay loop muted>
            <source src="/wp-content/themes/foce-child/assets/video/studio-koukaki.mp4" type="video/mp4">
        </video>
        <img id="banner-img" src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> " alt="Fallback Image">
        <img id="banner" class="banner parallax" src="<?php echo get_stylesheet_directory_uri() . '/assets/logo.png'; ?> " alt="Logo Fleurs d'oranger et chats errants">
        </section>
        <section id="#story" class="story parallax-section fade-from-top">
        <h2><div class="story-title fade-in-up">L'histoire</div></h2>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

           <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="swiper-container">
                <h3 class="characters-title fade-in-up">Les personnages</h3>
                    <div class="swiper-wrapper">
                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<div class="swiper-slide">';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<h4>';
                        the_title();
                        echo'</h4>';
                        echo '</div>';
                    }
                    ?>
                </div>
                </div>
              <div class="swiper-pagination"></div>
            </article>
            <article id="place" class="story">
                <div>
                <h3 class="place-title fade-in-up">Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="clouds">
                 <img src="/wp-content/themes/foce-child/assets/big_cloud.png" alt="Grand nuage" class="cloud" id="big_cloud">
                 <img src="/wp-content/themes/foce-child/assets/little_cloud.png" alt="petit nuage" class="cloud" id="little_cloud">
            </div>
            </article>
        </section>

        <section id="studio" class="parallax-section fade-from-top">
        <h2><div class="studio-title fade-in-up">Studio Koukaki</div></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
        <?php get_template_part('templates-parts/section-finale'); ?>
    </main><!-- #main -->

<?php
get_footer();
