<?php

/*
*
*   Template Name: Contact
*/

  get_header();

?>

    <main class="wrapper">
      <!-- Banner Section Start -->
      <section class="banner-section contact__banner">
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
      <section class="contact__block-sec">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-12 col-md-4 order-1 order-md-0">
              <div class="block__content left-content">
                <div class="contents">
                  <h5 class="contents__title">PROJECTS</h5>
                  <a
                    class="anchor__link"
                    href="mailto:info@apextransformations.ca"
                    >info@apextransformations.ca</a
                  >
                </div>

                <div class="contents">
                  <h5 class="contents__title">PHONE</h5>
                  <a class="anchor__link" href="tel:19052662692"
                    >+1 905-266-2692</a
                  >
                </div>
                <div class="contents">
                  <h5 class="contents__title">ADDRESS</h5>
                  <address>
                    7250 Keele St. <br />
                    Concord, ON L4K 1Z8 <br />
                    Units #36 and #73
                  </address>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-8">
              <div class="block__content right-content">
                <?php if (get_field('right_side_bold_text')) :
                      echo the_field('right_side_bold_text');
                endif;?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Features Block Section End  -->
    </main>

<?php get_footer(); ?>