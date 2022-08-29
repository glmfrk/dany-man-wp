<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dany_man
 */


/**
 *  Template Name:  Frontpage
 */

get_header();



?>

    <main class="site-main">
      <!-- Banner Section Start -->
      <section class="banner-section">
        <div class="container">
          <div class="hero_content">
              <?php if( get_field('hero_title') ): ?>
                <h1 class="hero_content-title"><?php the_field('hero_title'); ?></h1>
              <?php endif; ?>
            
              <div class="banner-image">
              <?php
                $image = get_field('hero_image');
              if( $image == true): ?>
                <img
                src="<?php echo $image['url']; ?>"
                alt="<?php echo $image['alt']; ?>"
                />
              <?php endif; ?>
              </div>
            <div class="right-scroll-bar">scroll <span></span></div>
          </div>
        </div>
      </section>

      <!-- Banner Section End -->

      <!-- Features Block Section Start  -->
      <section class="features__block-sec">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-5">
              <div class="block__content left-content">

                <h2 class="title__content">  

                  <?php

                    if (get_field('focus_title')) {
                        echo the_field('focus_title'); 
                    } 

                  ?>

                </h2>

              </div>
            </div>
            <div class="col-12 col-md-7">
              <div class="block__content right-content">
 
                <?php

                  if (get_field('focus_massage')) {
                      echo the_field('focus_massage'); 
                  } 

                ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Features Block Section End  -->

      <!-- Product Carosel Section Start -->
      <section class="product__caro-sec">
        <div class="section__wrapper-title text-center">
          <?php if( get_field('project_slider_section_title') ): ?>
            <h2 class="sec__title"><?php the_field('project_slider_section_title'); ?></h2>
          <?php endif; ?>
          
        </div>
        <div class="product__caro owl-carousel">
  
          <?php
          
              $args = array(  
                'post_type' => 'portfolios',
                'post_status' => 'publish',
                'posts_per_page' => 10, 
              );

              $loop = new WP_Query( $args ); 
                  
              while ( $loop->have_posts() ) : $loop->the_post(); 
                ?>
                  <figure class="slide-item">
                          <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                        </figure>
                <?php
              endwhile;

              wp_reset_postdata(); ?>

        </div>
        <div class="view__project">

          <?php if( get_field('project_slider_anchor_text') ): ?>
            <a href="<?php the_permalink(  $loop->ID = 9 ); ?>" class="btn btn-primary"> 
            <?php  the_field('project_slider_anchor_text'); ?> </a>
          <?php endif; ?>
  
        </div>
      </section>
      <!-- Product Carosel Section End -->

      <!-- Expertise Section Start -->
      <section class="expertise__section">
        <div class="section__wrapper-title text-center">
          <?php if( get_field('full_width_image_section_title') ): ?>
            <h2 class="sec__title"><?php the_field('full_width_image_section_title'); ?></h2>
          <?php endif; ?>
        </div>


        <?php
          $image = get_field('full_width_image');
          if( $image == true): ?>
            <figure class="image__block">
              <img
              src="<?php echo $image['url']; ?>"
              alt="<?php echo $image['alt']; ?>"
              />
            </figure>
       
        <?php endif; ?>
   
      </section>
      <!-- Expertise Section End -->

      <!-- Features Block Section Start  -->
      <section class="features__block-sec">
        <div class="container">
          <div class="row g-5 align-items-start">
            <div class="col-sm-6 col-md-5">
              <div class="block__content left-content">

                <?php if( get_field('left_column_text') ): ?>
                  <?php the_field('left_column_text'); ?> 
                <?php endif; ?>

              </div>
            </div>
            <div class="col-sm-6 col-md-7">
              <div class="block__content right-content">
                <?php if( get_field('right_column_text') ): ?>
                  <?php the_field('right_column_text'); ?> 
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Features Block Section End  -->

      <!-- Testimonial Section Start -->
      <div class="testimonial-section" id="testimonial">
        <div class="container">
          <div class="row g-0">
            <div class="col-12">
              <div class="testimonial owl-carousel">
                <?php 
          
                  $the_query  = new WP_Query(array(
                      'post_type'         =>  'testimonial-slider',
                      'posts_per_page'    =>  -1,
                  ));

                  if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :  $the_query->the_post(); ?>
                        <div class="slide-item">
                          <div class="slide-content">
                            <div class="quote-icon">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="block__content">
                              <?php wp_trim_words( the_content(), 50, null ); ?>
                            </div>
                          </div>
                        </div>
                <?php endwhile; 
                      // <!-- end of the loop -->
                  
                  else : 
                    echo  'Sorry, Something else..';
                    endif; 
                ?>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial Section End -->

      <!-- Services Section Start  -->
      <section class="services-section">
        <div class="container">
            <?php 

                $servies = new WP_Query(array(
                  'post_type'       => 'services',
                  'posts_per_page'    => 3,
                ));

                $index = 0;
                if ($servies-> have_posts()) :
                while ($servies-> have_posts() && $index <= $servies->found_posts)   :   $servies-> the_post();
            ?>

              <?php if($index % 2 == 0) : ?>
                <div class="row flexRow g-4 align-items-center">
                  <div class="col-12 col-md-6">
                    <div class="block__image">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="block__content mt-sm-30">
                      <h3 class="title__content"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php echo wp_trim_words( the_content(), 70 ); ?>
                    </div>
                  </div>
                  
                </div>
              <?php else : ?>
                <div class="row flexRow g-4 align-items-center">
                  <div class="col-12 col-md-6">
                    <div class="block__content mt-sm-30">
                      <h3 class="title__content"><a href="#"><?php the_title(); ?></a></h3>
                      <?php echo wp_trim_words( the_content(), 70 ); ?>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="block__image">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                  </div>
                </div>
              <?php endif ?>

            <?php 
                $index++;
                endwhile; 
                // <!-- end of the loop -->
              
                endif; 

            ?>
        </div>
      </section>
      <!-- Services Section End  -->

      <!-- News & Offer Section Start  -->

          <?php  get_template_part( 'template-parts/news__offer' ); ?>
          
      <!-- News & Offer Section End  -->

    </main>

<?php get_footer(); ?>