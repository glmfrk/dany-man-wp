<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dany_man
 */

?>


    <!-- Footer Section Start -->
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <div class="row g-0">
              <?php dynamic_sidebar( 'f-widget-1' ); ?>
              <?php dynamic_sidebar( 'f-widget-2' ); ?>
              <?php dynamic_sidebar( 'f-widget-3' ); ?>
              <?php dynamic_sidebar( 'f-widget-4' ); ?>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="site-info">
            <div class="left-item">
              <p>
                <?php echo get_theme_mod('copyright') ?>
              </p>
            </div>
            <div class="right-item">
              
                <?php if (true === get_theme_mod('experience_visibility')) : ?>
                  <p>
                    <?php echo get_theme_mod('devName'); ?>
                  
                  </p>
                  <?php endif ?>
              
          
            </div>
          </div><!-- .site-info -->
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Fly Out Menu -->
    <div class="overlay-slide" id="overlay">
      <nav class="overlay-menu">
        <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <?php 
                  $custom_logo_id = get_theme_mod( 'custom_logo');
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  
                  if ( has_custom_logo() ) {
                      echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                  } else {
                      echo '<h1>' . get_bloginfo('name') . '</h1>';
                  }
              ?>
          </a>
          <div class="close-btn">
            <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
          </div>
        </div>

        <?php

              $args = array(
                'container'     => '',
                'theme_location'=> 'mobile-menu',
                'menu_class'           => 'main-nav',
                'menu_id'              => '',
                'before'               => '',
                'after'                => '',
                'link_before'          => '',
                'link_after'           => '',
                'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'                => 0,
                'fallback_cb'   => false,
                'walker'               => '',
                'add_li_class'  => 'sub-menu'
                );

					wp_nav_menu($args); ?> 

      </nav>
    </div>
    <!-- Fly Out Menu -->

	
	<?php wp_footer(); ?>
  </body>
</html>

