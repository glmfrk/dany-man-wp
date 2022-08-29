<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dany_man
 */

?>



 
<article id="post-<?php the_ID(); ?>" <?php post_class('single__post__article'); ?> >
	<header class="entry-header section__wrapper-title">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="post__title sec__title">', '</h2>' );
		else :
			the_title( '<h3 class="post__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="post-meta">
				<?php
				dany_man_posted_on();
				dany_man_posted_by(); ?> <i class="fa-solid fa-message"></i> <?php
				comments_popup_link( 'No Comment', '1 Comment', '% Comments', "comment_link", true );
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<figure class="post__thumbnail">
		<?php dany_man_post_thumbnail(); ?>
	</figure>

	<div class="block__content ">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dany-man' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dany-man' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php dany_man_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
