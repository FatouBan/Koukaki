<div class="swiper-container">
                <h3 class="fade-in-up">Les personnages</h3>
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
              </div>