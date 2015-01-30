<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package volta
 */

get_header(); ?>

<?php if( 'page' == get_option( 'show_on_front' ) ): ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					if( get_theme_mod('volta_show_comments_page') == 'yes' ) :
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php else : ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				$volta_selected_front_layout = get_theme_mod('volta_front_page_layout', 'two' );
				get_template_part('front', $volta_selected_front_layout);
			?>
            
		</main><!-- #main -->
	</div><!-- #primary -->
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
