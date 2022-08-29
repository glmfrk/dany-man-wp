<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dany_man
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?> " />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon -->
    <link
      rel="shortcut icon"
      type="image/png"
      href="<?php echo get_template_directory_uri() ?> . /assets/images/logo/favicon.png"
    />



	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


    <div class="bg-shade"></div>
    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    <!-- header part start -->

    <header class="header-part">
      <div class="container">
        <nav class="navigation-wrapper">
          <div class="site-logo">
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
          </div>
          <div class="primary-menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary-menu',
						)
					);
				?>
        		<?php if (true === get_theme_mod('call_to_action_visibility')) : ?>
              <div class="header-btn">
                <a href="<?php echo get_theme_mod( 'call_to_action_url') ?>" class="btn btn-primary"><?php echo get_theme_mod( 'call_to_action') ?></a>
              </div>
            	<?php endif ?>
            <div class="toggler-button">
			
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </nav> <!-- #site-navigation -->
      </div>
    </header>
    <!-- header part end -->






