
    <section class="news__offer-sec">
        <div class="container">
            <div class="row align-items-center">
                <?php 
                    // the query

                    $args = array(
                    'post_type'   =>  'post',
                    'posts_per_page'    => 2,
                    );


                    $the_query = new WP_Query( $args ); 
                    
                    if ( $the_query->have_posts() ) : 
                    
                        // Loop Start 
                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            

                        <div class="col-6 col-lg-4 order-1 order-lg-0">
                            <div class="column-item">
                            <div class="image">
                                <?php  the_post_thumbnail(); ?>
                            </div>
                            <div class="contents">
                                <div class="heading">
                                <h5 class="category-title"><a href="<?php the_permalink(); ?>"><?php the_category(); ?></a></h5>
                                <h4 class="title__content">
                                    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                                </h4>
                                </div>

                                <div class="anchor-link">
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">read full</a>
                                </div>
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
            
                        
                <div class="col-12 col-lg-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="column-item section-title">
                                <div class="block__content">
                                    <h2 class="title__content">
                                    news <br />
                                    & Offers
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
