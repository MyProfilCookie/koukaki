<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner fade-in-section">
            <video class="background-video banner-video" autoplay loop muted 
            data-bottom="transform: translateY(0px);" 
            data-top-bottom="transform: translateY(-200px);"
            poster="<?php echo get_template_directory_uri() . '-child/assets/images/banner.png'; ?>">
            <source src="<?php echo get_template_directory_uri() . '-child/assets/video/Studio_Koukaki-vidéo_header_sans_son_.mp4'; ?>" type="video/mp4">
            </video>
        <img class="logo-image fade-in-section" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        <span class="observe-fade-in-move"></span>
        <span class="observe-fade-in-section"></span>
        </section>
        <section id="story" class="story fade-in-section">
            <h2>
                <span class="contain-story">
                    <span class="title-story">L'histoire</span>
                </span>
            </h2>
            <span class="observe-story"></span>
            <article id="" class="story__article">
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
                <div class="main-character">
                    <h3>
                        <span class="title-character">Les personnages</span>
                    </h3>
                </div>
                <span class="observe-character"></span>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        while ( $characters_query->have_posts() ) {
                            $characters_query->the_post();
                            echo '<div class="swiper-slide"><figure>';
                            echo get_the_post_thumbnail( get_the_ID(), 'full' );
                            echo '<figcaption>';
                            the_title();
                            echo'</figcaption>';
                            echo '</figure></div>';
                        }
                        ?>
                    </div>
                </div>
            </article>
            <article id="place" class="fade-in-section">
                <div>
                    <h3>
                        <span class = "title-place">Le Lieu</span>

                    </h3>
                    <span class="observe-place"></span>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <img id="big-cloud" class="cloud big-cloud" src="<?php echo get_template_directory_uri() . '-child/assets/images/big_cloud.png'; ?>" alt="gros nuage">
                    <img id="small-cloud" class="cloud small-cloud" src="<?php echo get_template_directory_uri() . '-child/assets/images/little_cloud.png'; ?>" alt="petit nuage">
                    <article class="observe-fade-in-section"></article>
            </article>
        </section>
        <section class="observe-fade-in-section"></section>


        <section id="studio" class="fade-in-section">
            <h2>
                <span class="contain-story">
                    <span class="title-studio studio">Studio Koukaki</span> 
                </span>
            </h2>
            <span class="observe-studio"></span>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            <span class="observe-fade-in-section"></span>
        </section>
            <?php get_template_part( 'section-oscars/section-oscars' ); ?>
    </main><!-- #main -->
<?php
get_footer();
