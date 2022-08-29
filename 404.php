<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dany_man
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="single__page-content">
			<div class="error-404 not-found">
			<div class="container">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops!.... 404 ERROR...!!!', 'dany-man' ); ?></h1>
						<h3><?php esc_html_e( 'That page can&rsquo;t be found.', 'dany-man' ); ?></h3>
					</header><!-- .page-header -->

					<div class="page-content">
						<h4><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dany-man' ); ?></h4>

							<?php get_search_form(); ?>

						<h5 class="go_back"><?php esc_html_e( 'Please Go Back To ', 'dany-man' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ) ?>"> Home Page</a> </h5>
					</div><!-- .page-content -->
				</div><!-- .error-404 -->
			</div>
		</section>


	</main><!-- #main -->

<?php
get_footer();
