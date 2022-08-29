<?php

/*
*   Template Name: Portfolios
*
*/



get_header();


?>

    <main class="wrapper">
      <!-- Portfolios Section Start  -->
      <section class="portfolio-section">
        <div class="container">
          <div class="section__wrapper-title">
            <h2 class="sec__title">our work</h2>
          </div>
          <div class="row align-items-center">

            <?php 
            
                $the_query  = new WP_Query(array(
                    'post_type'         =>  'portfolios',
                    'posts_per_page'    =>  -1,
                ));

                if ($the_query-> have_posts()) :
                    while ($the_query-> have_posts())   :   $the_query-> the_post(); ?>

                      <div class="col-6">
                        <div class="column-item">
                          <div class="image">
                              <?php the_post_thumbnail(); ?>
                          </div>
                          <div class="contents">
                            <h4 class="title__content">
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <h5 class="category-title"><?php the_category(','); ?></h5>
                          </div>
                        </div>
                      </div>
        
            <?php 
                endwhile; 
                // <!-- end of the loop -->
            
                // <!-- pagination here -->
            
                wp_reset_postdata(); 
                
                else : 
                    get_template_part( 'template-parts/content', 'none' );
                endif; 

            ?>


            <!-- <div class="col-6">
              <div class="column-item">
                <div class="image">
                  <img
                    src="assets/images/portfolios/portfolios-02.png"
                    alt="portfolio-image"
                  />
                </div>
                <div class="contents">
                  <h4 class="title__content">
                    <a href="#">Rogers Place</a>
                  </h4>
                  <h5 class="category-title"><a href="#">ALBERTA, CA</a></h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="column-item">
                <div class="image">
                  <img
                    src="assets/images/portfolios/portfolios-03.png"
                    alt="portfolio-image"
                  />
                </div>
                <div class="contents">
                  <h4 class="title__content">
                    <a href="#">Two St. Thomas</a>
                  </h4>
                  <h5 class="category-title"><a href="#">ONTARIO , CA</a></h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="column-item">
                <div class="image">
                  <img
                    src="assets/images/portfolios/portfolios-04.png"
                    alt="portfolio-image"
                  />
                </div>
                <div class="contents">
                  <h4 class="title__content">
                    <a href="#">835 Sterling Lyon - LXTX</a>
                  </h4>
                  <h5 class="category-title"><a href="#">MANITOBA , CA</a></h5>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="column-item">
                <div class="image">
                  <img
                    src="assets/images/portfolios/portfolios-04.png"
                    alt="portfolio-image"
                  />
                </div>
                <div class="contents">
                  <h4 class="title__content">
                    <a href="#">Delta Downtown Saskatoon Renovation</a>
                  </h4>
                  <h5 class="category-title">
                    <a href="#">SASKATCHEWAN , CA</a>
                  </h5>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      <!-- Portfolios Section End  -->

      <!-- News & Offer Section Start  -->

            <?php  get_template_part( 'template-parts/news__offer' ); ?>
          
      <!-- News & Offer Section End  -->

    </main>

<?php get_footer(); ?>    