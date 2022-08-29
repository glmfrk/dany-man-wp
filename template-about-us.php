<?php

/*
*
*   Template Name: About Page
*/

    get_header();

?>

    <main class="wrapper">
      <!-- Banner Section Start -->
      <section class="banner-section about__banner">
        <div class="container">
          <div class="hero_content">
            <h1 class="hero_content-title"><?php the_title(); ?></h1>
              <?php
                $image = get_field('hero_image');
                if( $image == true): ?>
                  <figure class="banner-image">
                    <img
                    src="<?php echo $image['url']; ?>"
                    alt="<?php echo $image['alt']; ?>"
                    />
                  </figure>
                <?php
                else: ?>
                <figure class="post__thumbnail">
                  <?php dany_man_post_thumbnail(); ?>
                </figure>
              <?php
              endif; ?>

            <div class="right-scroll-bar">scroll <span></span></div>
          </div>
        </div>
      </section>

      <!-- Banner Section End -->

      <!-- Features Block Section Start  -->
      <section class="features__block-sec about__features">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-5">
              <div class="block__content left-content">
                <?php if( get_field('features_block_title')) : ?>
                  <h2 class="title__content"><?php the_field('features_block_title'); ?></h2>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-12 col-md-7">
              <div class="block__content right-content">
                <?php if( get_field('features_block_massage')) : ?>
                    <?php the_field('features_block_massage'); ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Features Block Section End  -->

      <!--  Block Section Start  -->
      <section class="about__block-sec">
        <div class="about__block about__block-01">
          <div class="container">
            <div class="row g-5 align-items-end justify-content-between">
              <div class="col-12 col-md-5 order-1 order-md-0">
                <div class="block__content left-content">

                  <?php if( get_field('feature_left_block_massage')) : the_field('feature_left_block_massage');  endif;?>
                 
                </div>
              </div>
              <div class="col-12 col-md-7">
                <div class="block__content right-content">
                  <?php if( get_field('feature_right_block_title')) : ?>
                    <h2 class="title__content"><?php the_field('feature_right_block_title'); ?></h2>
                  <?php endif; ?>

                  <?php
                    $image = get_field('feature_right_block_image');
                    if( $image == true): ?>
                    
                      <figure class="block__image">
                          <img
                            src="<?php echo $image['url']; ?>"
                            alt="<?php echo $image['alt']; ?>"
                          />
                      </figure>
                    
                  <?php endif; ?>
          
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="about__block about__block-02">
          <div class="container">
            <div class="row align-items-center justify-content-between">
              <div class="col-12">
                <div class="block__content left-content">

                  <?php if( get_field('feature_image_top_left_title')) : ?>
                    <h2 class="title__content title-top"><?php the_field('feature_image_top_left_title'); ?></h2>
                  <?php endif; ?>

                  <?php
                    $image = get_field('feature_image');
                    if( $image == true): ?>
                    
                      <figure class="feature-image block__image">
                          <img
                            src="<?php echo $image['url']; ?>"
                            alt="<?php echo $image['alt']; ?>"
                          />
                      </figure>
                
                    
                  <?php endif; ?>
                
        
                  <?php if( get_field('feature_image_bottom_right_title')) : ?>
                    <h2 class="title__content text-end title-bottom"><?php the_field('feature_image_bottom_right_title'); ?></h2>
                  <?php endif; ?>

                </div>
              </div>
            </div>
          </div>
        </div>

        <?php if( have_rows('service_single_block') ): ?>
          <?php while( have_rows('service_single_block') ): the_row(); 

           
              // Get sub field values.
              $image = get_sub_field('left_image');
              $link = get_sub_field('link'); ?>

            
                <div class="about__block about__block-03">
                  <div class="container">
                    <div class="row align-items-end justify-content-between">
                      <div class="col-12 col-md-7">
                        <div class="block__content right-content">

                          <p><?php the_sub_field('left_content'); ?></p>

                          <?php if( $image == true ) :?>

                            <figure class="block__image">
                              <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                            </figure>

                          <?php endif; ?>


                        </div>
                      </div>
                      <div class="col-12 col-md-5 order-1 order-md-0">
                        <div class="block__content left-content">
                  
                          <?php if( get_sub_field('left_right_content')) : ?>

                            <?php the_sub_field('left_right_content'); ?>

                          <?php endif; ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
                <div class="about__block about__block-04">
                  <div class="container">
                    <div class="row g-5 align-items-center justify-content-between">
                      <div class="col-12 col-md-6 order-1 order-md-0">
                        <div class="block__content left-content">

                        <?php if( get_sub_field('right_left_title', 'right_left_content')) : ?>

                          <h2 class="title__content"> <?php the_sub_field('right_left_title'); ?>  </h2>

                          <?php the_sub_field('right_left_content'); ?>

                        <?php endif; ?>

                    
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="block__content right-content">
                          <?php 

                              $image = get_sub_field('right_image');

                            if( $image == true) :?>

                            <figure class="block__image">

                              <img src="<?php echo $image['url']; ?>" alt="<?php $image['alt'] ?>" />

                            </figure>

                          <?php endif; ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
           

          <?php endwhile; ?>
        <?php endif; ?>

  
      </section>
      <!--  Block Section End  -->

      <section class="counter__block-sec">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
              <div class="row flexRow">

                  <?php
                  
                      $countDown =  new WP_Query(array(
                          'post_type'       =>  'counter',
                          'posts_per_page'  =>  6,
                      ));
                  
                  if( $countDown->have_posts() ): ?>
                        <?php while( $countDown->have_posts() )  :   $countDown->the_post(); ?>
                                <div class="column-item">
                                  <div class="block__content">
                                    <h1 class="title__content"><?php the_title(); ?></h1>
                                    <div class="content"><?php the_excerpt(); ?></div>
                                  </div>
                                </div>
                  
                        <?php endwhile; ?>
                  <?php endif; ?>




                <!-- <div class="column-item">
                  <div class="block__content">
                    <h1 class="title__content">9.5K+</h1>
                    <p class="content">Employees</p>
                  </div>
                </div>
                <div class="column-item">
                  <div class="block__content">
                    <h1 class="title__content">30+</h1>
                    <p class="content">Offices</p>
                  </div>
                </div>
                <div class="column-item">
                  <div class="block__content">
                    <h1 class="title__content">$8B</h1>
                    <p class="content">Annual Construction Volume</p>
                  </div>
                </div>
                <div class="column-item">
                  <div class="block__content">
                    <h1 class="title__content">$8.7M</h1>
                    <p class="content">
                      Donated to Community Organizations in 2020
                    </p>
                  </div>
                </div>
                <div class="column-item">
                  <div class="block__content">
                    <h1 class="title__content">700+</h1>
                    <p class="content">Projects Underway</p>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section Start  -->
      <section class="about__sec">
        <div class="container">
          <div class="section__wrapper-title">
            <?php if( get_field('about_me_title')) : ?>
            <h2 class="sec__title">
              <?php the_field('about_me_title'); ?>
            </h2>
            <?php endif; ?>
          </div>
          <div class="row g-4 align-items-center">
            <div class="col-12 col-md-6">
              <div class="block__content mt-sm-30">
                  <?php if( get_field('about_heading')) : ?>
                  <h3 class="title__content"><a href="#"><?php the_field('about_heading')[0]; ?></a></h3>
                  <?php endif; ?>

                  <?php if( get_field('about_sub_heading')) : ?>
                    <h5 class="content"><?php the_field('about_sub_heading'); ?></h5>
                  <?php endif; ?>

                  <?php if( get_field('about_bio')) : ?>
                    <div class="content">
                      <?php the_field('about_bio'); ?>
                    </div>
                  <?php endif; ?>
                 
                  
                  <?php 
                    $link = get_field('anchor_1');
                    $link2 = get_field('anchor_2');
                    
                    if( $link && $link2  ): 
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';

                      $link_url2 = $link2['url'];
                      $link_title2 = $link2['title'];
                      $link_target2 = $link2['target'] ? $link2['target'] : '_self';
                      
                      ?>
                      <div class="button__wrapper">
                        <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <a class="btn btn-primary" href="<?php echo esc_url( $link_url2 ); ?>" target="<?php echo esc_attr( $link_target2 ); ?>"><?php echo esc_html( $link_title2 ); ?></a>
                      </div>
                        
                  <?php endif; ?>
               
                
              </div>
            </div>
            <div class="col-12 col-md-6">
              <figure class="block__image">

                <?php 

                  $image = get_field('about_image');

                  if( $image == true) :?>

                  <figure class="block__image">

                    <img src="<?php echo $image['url']; ?>" alt="<?php $image['alt'] ?>" />

                  </figure>

                <?php endif; ?>
    
              </figure>
            </div>
          </div>
        </div>
      </section>
      <!-- Services Section End  -->

      <!-- News & Offer Section Start  -->
          <?php  get_template_part( 'template-parts/news__offer'); ?>

      <!-- News & Offer Section End  -->
    </main>

  <?php get_footer(); ?>