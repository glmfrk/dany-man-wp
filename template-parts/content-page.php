<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dany_man
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single__post__article'); ?>>
	<header class="entry-header section__wrapper-title">
		<?php the_title( '<h1 class="post__title sec__title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if(dany_man_post_thumbnail()) : ?>
		<figure class="post__thumbnail">
			<?php dany_man_post_thumbnail(); ?>
		</figure>
	<?php endif; ?>

	<div class="entry-content block__content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dany-man' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'dany-man' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
